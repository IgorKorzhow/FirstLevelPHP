<?php

class Searcher
{
    public array $matrix;
    public array $startPos;
    public array $endPos;
    public ?SplDoublyLinkedList $path = null;
    public ?int $steps = null;

    public function __construct(array $startPos, array $endPos)
    {
        $this->matrix = $this->generateMatrix();
        $this->startPos = $startPos;
        $this->endPos = $endPos;
    }

    public function shortestPath():void {

        if($this->matrix[$this->startPos[0]][$this->startPos[0]] == 1) {
            echo "Start pos error";
            return;
        }
        if($this->matrix[$this->endPos[0]][$this->endPos[0]] == 1) {
            echo "End pos error";
            return;
        }

        $q = new SplQueue();

        $Nw = new Node($this->startPos[0], $this->startPos[1], 0);
        $q->push($Nw);


        $path = array();
        $path[$this->startPos[0]][$this->startPos[1]] = new SplDoublyLinkedList();
        $path[$this->startPos[0]][$this->startPos[1]]->setIteratorMode(
            SplDoublyLinkedList::IT_MODE_FIFO|SplDoublyLinkedList::IT_MODE_KEEP
        );
        $path[$this->startPos[0]][$this->startPos[1]]->push($this->startPos);


        $N = count($this->matrix);
        $M = count($this->matrix[0]);

        $visited = array();
        for ($i = 0; $i < $N; $i++) {
            for ($j = 0; $j < $M; $j++) {
                $visited[$i][$j] = false;
            }
        }

        $dir = [[-1, 0], [1, 0], [0, 1], [0, -1]];

        while (!$q->isEmpty()) {

            $curr = $q->dequeue();

            if ($visited[$curr->i][$curr->j])
                continue;

            $visited[$curr->i][$curr->j] = true;

            if ($curr->i == $this->endPos[0] && $curr->j == $this->endPos[1]) {
                $this->path = $path[$this->endPos[0]][$this->endPos[1]];
                $this->steps = $curr->dist;
                return;
            }

            for ($i = 0; $i < 4; $i++) {

                $x = $dir[$i][0] + $curr->i;
                $y = $dir[$i][1] + $curr->j;

                if ($x < 0 || $y < 0 || $x == $N || $y == $M
                    || $visited[$x][$y] || $this->matrix[$x][$y] == 1)
                    continue;

                $n = new Node($x, $y, $curr->dist + 1);
                $q->push($n);

                $path[$x][$y] = clone $path[$curr->i][$curr->j];
                $path[$x][$y]->push([$x, $y]);
            }
        }
        $this->path = null;
        $this->steps = null;
    }

    public function generateMatrix():array {
        $matrix = array();
        for($i = 0; $i < 10; $i++) {
            for($j = 0; $j < 10; $j++) {
                $matrix[$i][$j] = random_int(0, 1);
            }
        }
        return $matrix;
    }

    public function displayMatrix():void {
        for($i = 0; $i < 10; $i++) {
            for($j = 0; $j < 10; $j++) {
                echo $this->matrix[$i][$j].' ';
            }
            echo "\n";
        }
    }


}