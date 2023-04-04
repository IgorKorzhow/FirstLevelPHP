<?php

class Matrix
{
    public array $matrix;
    public int $rowCount;
    public int $colCount;

    public function __construct(array $array)
    {
        $this->matrix = $array;
        $this->colCount = count($array[0]);
        $this->rowCount = count($array);
    }

    public function addition(Matrix $matrix) {
        if (($this->rowCount != $matrix->rowCount) || ($this->colCount != $matrix->colCount)) {
            echo "Dimension error";
            return;
        }
        for ($i = 0; $i < $this->rowCount; $i++) {
            for ($j = 0; $j < $this->colCount; $j++)
                $this->matrix[$i][$j] += $matrix->matrix[$i][$j];
        }
    }

    public function multiplicationByNumber(int $number) {
        for ($i=0; $i < $this->rowCount; $i++) {
            for ($j=0; $j < $this->colCount; $j++)
                $this->matrix[$i][$j] *= $number;
        }
    }

public function multiplicationByMatrix(Matrix $var) {
    if (($this->rowCount != $var->colCount) || ($this->colCount != $var->rowCount)) {
        echo "Dimension error";
        return;
    }

    $res = [];
    for ($i=0; $i < $this->rowCount; $i++) {
        for($j=0; $j < $var->colCount; $j++) {
            $sum = 0;
            for ($k=0; $k < $var->rowCount; $k++) {
                $sum += $this->matrix[$i][$k] * $var->matrix[$k][$j];
            }
            $res[$i][$j] = $sum;
        }
    }

    $this->matrix = $res;
    $this->colCount = count($res[0]);
    $this->rowCount = count($res);
}

    public function output() {
        echo "Your matrix : \n";
        for ($i=0; $i < $this->rowCount; $i++) {
            for ($j=0; $j < $this->colCount; $j++)
                echo $this->matrix[$i][$j]." ";
            echo "\n";
        }
    }
}