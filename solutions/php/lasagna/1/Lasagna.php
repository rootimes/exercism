<?php

class Lasagna
{
    private $cookTime = 40;

    private $prepareTime = 2;
    
    public function expectedCookTime()
    {
        return $this->cookTime;
    }

    public function remainingCookTime($elapsed_minutes)
    {
        return $this -> cookTime - $elapsed_minutes;
    }

    public function totalPreparationTime($layers_to_prep)
    {
        return  $this->prepareTime * $layers_to_prep;
    }

    public function totalElapsedTime($layers_to_prep, $elapsed_minutes)
    {
        return $this->totalPreparationTime($layers_to_prep) + $elapsed_minutes;
    }

    public function alarm()
    {
        return "Ding!";
    }
}
