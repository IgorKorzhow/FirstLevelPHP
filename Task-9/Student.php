<?php

class Student
{
    public string $firstName;
    public string $lastName;
    public string $group;
    public float $averageMark;

    public function __construct(string $fn, string $ln, string $gr, float $averageMark)
    {
        $this->firstName = $fn;
        $this->lastName = $ln;
        $this->group = $gr;
        $this->averageMark = $averageMark;
    }

    public function getScholarship(): string {
        if ($this->averageMark == 5)
            return '100 USD';
        return '80 USD';
    }
}