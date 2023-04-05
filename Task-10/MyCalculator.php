<?php

class MyCalculator
{
    public int $firstNumber;
    public int $secondNumber;
    public float $res;

    public function __construct(int $firstNumber,int $secondNumber)
    {
        $this->firstNumber = $firstNumber;
        $this->secondNumber = $secondNumber;
    }

    public function add() : MyCalculator {
        $this->res = $this->firstNumber + $this->secondNumber;
        return $this;
    }

    public function multiply() : MyCalculator {
        $this->res = $this->firstNumber * $this->secondNumber;
        return $this;
    }

    public function divide() : MyCalculator {
        $this->res = $this->firstNumber / $this->secondNumber;
        return $this;
    }

    public function subtract() : MyCalculator {
        $this->res = $this->firstNumber - $this->secondNumber;
        return $this;
    }

    public function addBy(int $number) : MyCalculator {
        if(isset($this->res))
            $this->res += $number;
        return $this;
    }

    public function divideBy(int $number) : MyCalculator {
        if(isset($this->res))
            $this->res /= $number;
        return $this;
    }

    public function multiplyBy(int $number) : MyCalculator {
        if(isset($this->res))
            $this->res *= $number;
        return $this;
    }

    public function subtractBy(int $number) : MyCalculator {
        if(isset($this->res))
            $this->res -= $number;
        return $this;
    }

    public function __toString()
    {
        return (string)$this->res;
    }
}