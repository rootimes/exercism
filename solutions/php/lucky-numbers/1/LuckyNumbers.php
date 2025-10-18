<?php

class LuckyNumbers
{
    public function sumUp(array $digitsOfNumber1, array $digitsOfNumber2): int
    {
        $number_one = '';
        $number_two = '';
        
        foreach ($digitsOfNumber1 as $num)
        {
            $number_one .= $num; 
        }

        foreach ($digitsOfNumber2 as $num)
        {
            $number_two .= $num;
        }

        return (int)$number_one + (int)$number_two;
    }

    public function isPalindrome(int $number): bool
    {
        $number_string = (string)$number;
        $string_leng = strlen($number_string);
        
        for ($i=0; $i < $string_leng/2; $i++){
            if ($number_string[$i] !== $number_string[$string_leng - 1 - $i]){
                return false;
            }
        }

        return true;
    }

    public function validate(string $input): string
    {   
        $input = trim($input);
        if ($input === '') {
            return 'Required field';
        }
        
        if (!is_numeric((int)$input) || (int)$input <= 0) {
            return 'Must be a whole number larger than 0';
        }

        return '';
    }
}
