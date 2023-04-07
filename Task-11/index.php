<?php
require_once "Node.php";
require_once "Searcher.php";

/*
$start = [0, 0];

$end = [3,3];

$searcher = new Searcher($start, $end);
$searcher->displayMatrix();

$searcher->shortestPath(); */

$filename = __DIR__ . '/file.txt';

$searcher = Searcher::readFromFile($filename);
echo $searcher->displayMatrix();
echo $searcher->steps."\n";
echo $searcher->displayPath();
$searcher->saveToFile($filename);



