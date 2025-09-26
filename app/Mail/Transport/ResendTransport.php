<?php

namespace App\Mail\Transport;

use Symfony\Component\Mailer\Transport\AbstractTransport;
use Symfony\Component\Mailer\Envelope;
use Symfony\Component\Mime\RawMessage;
use Illuminate\Support\Facades\Http;

class ResendTransport extends AbstractTransport
{
    protected string $apiKey;

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    protected function doSend(RawMessage $message, Envelope $envelope = null): void
    {
        $to = collect($envelope->getRecipients())
            ->map(fn($r) => $r->toString())
            ->implode(',');

        Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->apiKey,
            'Content-Type'  => 'application/json',
        ])->post('https://api.resend.com/emails', [
            'from'    => config('mail.from.address'),
            'to'      => $to,
            'subject' => $message->getSubject(),
            'html'    => $message->toString(),
        ]);
    }

    public function __toString(): string
    {
        return 'resend';
    }
}
