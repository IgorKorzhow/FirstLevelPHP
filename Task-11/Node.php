<?php

class Node
{
    public int $dist;
    public int $i;
    public int $j;

    public function __construct(int $x, int $y, int $d)
    {
        $this->i = $x;
        $this->j = $y;
        $this->dist = $d;
    }
}