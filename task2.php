<?php

function birthdayCountdown(string $date) : string  {
    $today = new DateTime('today');
    $birthday = new DateTime($date);
    $birthday->setDate($today->format('Y'), $birthday->format('m'), $birthday->format('d'));
    $res = $today->diff($birthday);
    if($res->invert){
        global $res;
        $birthday->modify('+1 year');
        $res = $today->diff($birthday);
    }
    return $res->days;
}