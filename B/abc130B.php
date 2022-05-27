<?php

fscanf(STDIN, '%d', $n);
$w = explode(' ', trim(fgets(STDIN)));
$s1 = 0;
$s2 = 0;
$s = [];

for ($i = 0; $i < $n; $i++) {
    $s1 = array_sum(array_slice($w, 0, $i));
    $s2 = array_sum($w) - $s1;
    $s[] = abs($s1 - $s2);
}

echo min($s);
