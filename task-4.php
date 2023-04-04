<?php

function delElEndNormalize(array $arr, int $position) {
    $array_size = count($arr);
    for ($i = $position; $i < $array_size - 1; $i++)
        $arr[$i] = $arr[$i + 1];
    unset($arr[$array_size - 1]);
    return $arr;
}