<?php

namespace App\Mail\Transport;

use Illuminate\Support\Facades\Http;
use Symfony\Component\Mailer\SentMessage;
use Symfony\Component\Mailer\Transport\AbstractTransport;

class ResendTransport extends AbstractTransport
{
    protected string $apiKey;

    public function __construct(string $apiKey)
    {
        parent::__construct(); // Initialize parent properties (fixes dispatcher error)
        $this->apiKey = $apiKey;
    }

    protected function doSend(SentMessage $message): void
    {
        $original = $message->getOriginalMessage();

        $to = collect($original->getTo())
            ->map(fn($r) => $r->getAddress())
            ->implode(',');

        // Extract from properly
        $fromAddresses = $original->getFrom();
        $from = null;
        if ($fromAddresses && count($fromAddresses) > 0) {
            $address = $fromAddresses[0]; // Assume single from
            $name = $address->getName() ? $address->getName() . ' ' : '';
            $from = $name . '<' . $address->getAddress() . '>';
        } else {
            $from = config('mail.from.address');
        }

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->apiKey,
            'Content-Type'  => 'application/json',
        ])->post('https://api.resend.com/emails', [
            'from'    => $from,
            'to'      => $to,
            'subject' => $original->getSubject(),
            'html'    => $original->getHtmlBody() ?? $original->getTextBody() ?? $original->toString(),
        ]);

        if ($response->failed()) {
            throw new \Exception('Resend API error: ' . $response->body());
        }
    }

    public function __toString(): string
    {
        return 'resend';
    }
}