<?php

declare(strict_types=1);

function getAllColors(): array
{
    $colors = [
        'black',
        'brown',
        'red',
        'orange',
        'yellow',
        'green',
        'blue',
        'violet',
        'grey',
        'white'
    ];

    return $colors;
}

function colorCode(string $color): int
{
    $colors = [
        'black',
        'brown',
        'red',
        'orange',
        'yellow',
        'green',
        'blue',
        'violet',
        'grey',
        'white'
    ];
    
    return array_search($color, $colors);
}
