<?php

class HighSchoolSweetheart
{
    public function firstLetter(string $name): string
    {
        $name = trim($name);
        return $name[0];
    }

    public function initial(string $name): string
    {
        return strtoupper($this->firstLetter($name).'.');
    }

    public function initials(string $name): string
    {
        $nameSplits = explode (' ' , $name);

        $newName = '';
        foreach ($nameSplits as $string) {
            $newName .= $this->initial($string).' ';
        }

        return trim($newName);
    }

    public function pair(string $sweetheart_a, string $sweetheart_b): string
    {
        $pair1 = $this->initials($sweetheart_a);
        $pair2 = $this->initials($sweetheart_b);
        
        $heart = "     ******       ******\n";
        $heart .= "   **      **   **      **\n";
        $heart .= " **         ** **         **\n";
        $heart .= "**            *            **\n";
        $heart .= "**                         **\n";
        $heart .= "**     $pair1  +  $pair2     **\n";
        $heart .= " **                       **\n";
        $heart .= "   **                   **\n";
        $heart .= "     **               **\n";
        $heart .= "       **           **\n";
        $heart .= "         **       **\n";
        $heart .= "           **   **\n";
        $heart .= "             ***\n";
        $heart .= "              *";
        
        return $heart;
    }
}
