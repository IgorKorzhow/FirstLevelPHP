<?php

class Aspirant extends Student
{
    public string $researchWork;

    public function __construct(string $fn, string $ln, string $gr, float $averageMark, string $researchWork)
    {
        parent::__construct($fn, $ln, $gr, $averageMark);
        $this->researchWork = $researchWork;
    }

    public function getScholarship(): string {
        if ($this->averageMark == 5)
            return '200 USD';
        return '180 USD';
    }
}