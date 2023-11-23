<?php

function joinWords(array $words,string $pattern=","): string {
    $result = "";
    $pattern = $pattern . " ";
    for ($i = 0; $i < count($words); $i++) {
        if ($i == count($words) - 1) {
            $result .= $words[$i];
        } else {
            $result .= $words[$i] . $pattern;
        }
    }
    return $result;
}