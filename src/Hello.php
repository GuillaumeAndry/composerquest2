<?php

namespace App;

class Hello
{
    private string $message = 'Hello world !';

    public function talk(): string
    {
        // echo $this->message;
        return $this->message;
    }
}