<?php

class LuckyNumbers
{
    public function sumUp(array $digitsOfNumber1, array $digitsOfNumber2): int
    {        
        return implode('', $digitsOfNumber1) + implode('', $digitsOfNumber2);
    }

    public function isPalindrome(int $number): bool
    {
        $number_string = (string)$number;
        return $number_string === strrev($number_string);
    }

    public function validate(string $input): string
    {   
        $input = trim($input);
        if ($input === '') {
            return 'Required field';
        }

        if ((int)$input <= 0) {
            return 'Must be a whole number larger than 0';
        }

        return '';
    }
}
