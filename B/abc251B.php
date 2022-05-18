<?php

fscanf(STDIN, '%d%d', $n, $w);
$a = explode(' ', trim(fgets(STDIN)));
$c = 0;

for ($i = 0; $i <= 2; $i++) {
    for ($j = 0; $j < $n; $j++) {
        if (array_sum(array_splice($a, $j, $i)) > $w) {
            $c++;
        }
    }
}

echo $c;
