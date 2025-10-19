<?php

class PizzaPi
{    
    const PER_PIZZAS_VOLUME = 125;

    const PI = 3.1415926;
    
    public function calculateDoughRequirement(int $pizzas, int $persons)
    {
        return $pizzas * (($persons * 20) +200);
    }

    public function calculateSauceRequirement(int $pizzas, int $sauce)
    {
        return ceil($pizzas * self::PER_PIZZAS_VOLUME / $sauce);
    }

    public function calculateCheeseCubeCoverage(int $dimension, float $thickness, int $diameter)
    {
        return floor($dimension ** 3 / ($thickness *  self::PI * $diameter));
    }

    public function calculateLeftOverSlices(int $pizzas, int $friends)
    {
        return $pizzas*8 % $friends;
    }
}
