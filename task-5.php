<?php

function recursion(int $A, int $B) : void {
    if ($A == $B) {
        echo $A;
        return;
    }
    echo $A.' ';
    if($A <= $B) {
        ++$A;
        recursion($A, $B);
    } else {
        --$A;
        recursion($A, $B);
    }
}

recursion(9, 9);
