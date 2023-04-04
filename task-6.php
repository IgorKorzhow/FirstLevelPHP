<?php

function workWithStr(string $input): string {
    $strWithoutSpaces = trim($input, ' ');
    $arr = preg_split("[ |-|_]", $strWithoutSpaces);
    $res = '';
    foreach ($arr as $el)
        $res .= ucfirst($el);
    return $res;
}