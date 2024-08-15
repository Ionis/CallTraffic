<?php

namespace App\Services;

class StringToNumberService
{
    public function convert(string $input): int
    {
        return crc32($input);
    }
}
