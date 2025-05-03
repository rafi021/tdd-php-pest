<?php

namespace App\Http;

class Response
{
    public function __construct(
        private string $body,
        private int $statusCode = 200,
        private iterable $headers = []
    ) {
    }

    public function getBody(): string
    {
        return $this->body;
    }
    public function getStatusCode(): int
    {
        return $this->statusCode;
    }
    public function getHeaders(): array
    {
        return $this->headers;
    }

    public function json(): array
    {
        return json_decode($this->body, true);
    }
}
