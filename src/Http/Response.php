<?php

namespace App\Http;

class Response
{
    public function __construct(
        public string $body,
        public int $statusCode = 200,
        public array $headers = []
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
