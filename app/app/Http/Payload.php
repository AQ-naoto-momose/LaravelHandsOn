<?php

namespace App\Http;

use Exception;

class Payload
{
    public const SUCCEED = 'SUCCEED';
    public const FAILED = 'FAILED';

    private string $status;

    private mixed $output;

    private mixed $exception;

    public function setStatus($status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setOutput(mixed $output): self
    {
        $this->output = $output;

        return $this;
    }

    public function getOutput(): mixed
    {
        return $this->output;
    }

    public function getException(): Exception
    {
        return $this->exception;
    }

    public function setException(Exception $exception): Payload
    {
        $this->exception = $exception;

        return $this;
    }
}
