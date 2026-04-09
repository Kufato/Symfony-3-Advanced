<?php

namespace App\Service;

class Ex03Service
{
    public function uppercaseWords(string $string): string
    {
        return ucwords($string);
    }

    public function countNumbers(string $string): int
    {
        return strlen(preg_replace('/[^0-9]/', '', $string));
    }
}