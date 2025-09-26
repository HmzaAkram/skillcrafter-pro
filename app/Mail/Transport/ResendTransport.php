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
        $this->apiKey = $apiKey;
    }

    protected function doSend(SentMessage $message): void
    {
        $original = $message->getOriginalMessage();

        $to = collect($original->getTo())
            ->map(fn($r) => $r->getAddress())
            ->implode(',');

        Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->apiKey,
            'Content-Type'  => 'application/json',
        ])->post('https://api.resend.com/emails', [
            'from'    => config('mail.from.address'),
            'to'      => $to,
            'subject' => $original->getSubject(),
            'html'    => $original->getHtmlBody() ?? $original->toString(),
        ]);
    }

    public function __toString(): string
    {
        return 'resend';
    }
}
