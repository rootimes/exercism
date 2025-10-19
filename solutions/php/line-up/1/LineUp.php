<?php

declare(strict_types=1);

function format(string $name, int $number): string
{
    $number_end = substr((string)$number, -2);
    if ($number_end !== '11' & $number_end !== '12' && $number_end !== '13'){
        $number_end = substr($number_end, -1);
    }

    return match ($number_end) {
        '11' => "$name, you are the $number"."th customer we serve today. Thank you!",
        '12' => "$name, you are the $number"."th customer we serve today. Thank you!",
        '13' => "$name, you are the $number"."th customer we serve today. Thank you!",
        '1' => "$name, you are the $number"."st customer we serve today. Thank you!",
        '2' => "$name, you are the $number"."nd customer we serve today. Thank you!",
        '3' => "$name, you are the $number"."rd customer we serve today. Thank you!",
        default => "$name, you are the $number"."th customer we serve today. Thank you!",
    };
}
