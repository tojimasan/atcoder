<?php

fscanf(STDIN, '%d', $n);
$p = explode(' ', trim(fgets(STDIN)));
$c = 0;

for ($i = 1; $i < $n-1; $i++) {
    if (($p[$i-1] < $p[$i] && $p[$i] < $p[$i+1]) || ($p[$i-1] > $p[$i] && $p[$i] > $p[$i+1])) {
        $c++;
    }
}

echo $c;
