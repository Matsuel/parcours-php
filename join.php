<?php

function joinWords(array $words,string $joiner): string {
    $result = "";
    if ($joiner == null) {
        $joiner = ", ";
    }
    for ($i = 0; $i < count($words); $i++) {
        if ($i == count($words) - 1) {
            $result .= $words[$i];
        } else {
            $result .= $words[$i] . $joiner;
        }
    }
    return $result;
}