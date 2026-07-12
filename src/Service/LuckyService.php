<?php
// src/Service/LuckyService.php
namespace App\Service;

class LuckyService
{
    public function generateNumber(int $qt_chars = 6): int
    {
        $max = (int)str_repeat('9', $qt_chars);
        return random_int(0, $max);
    }

    public function generateNumberChars(int $qt_chars = 6): string
    {
        $number = $this->generateNumber($qt_chars);
        // ensure leading zeros to match requested length and keep as string
        return str_pad((string)$number, $qt_chars, '0', STR_PAD_LEFT);
    }
}
