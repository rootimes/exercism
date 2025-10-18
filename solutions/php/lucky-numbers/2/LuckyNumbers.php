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

        $input_int = (int)$input;
        if (is_numeric($input_int) && $input_int > 0) {
            return '';
        }

        return 'Must be a whole number larger than 0';
    }
}
