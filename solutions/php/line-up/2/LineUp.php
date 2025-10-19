<?php

declare(strict_types=1);

function format(string $name, int $number): string
{
    $mod = $number % 10;
    $mod_except = $number % 100;

    $suffix = match ($mod_except) {
        11, 12, 13 => 'th',
        default => match ($mod) {
            1 => 'st',
            2 => 'nd',
            3 => 'rd',
            default => 'th',
        }
    };

    return "$name, you are the {$number}$suffix customer we serve today. Thank you!";
}
