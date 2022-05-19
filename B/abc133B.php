<?php
fscanf(STDIN, '%d%d', $n, $d);
$c = 0;
for ($i = 0; $i < $n; $i++) {
    $x[$i] = explode(' ', trim(fgets(STDIN)));
}

for ($i = 0; $i < $n-1; $i++) {
    $val = 0;
    $current = $x[$i];
    $next = $x[$i+1];
    for ($j = 0; $j < $d; $j++) {
        $val += pow(($next[$j] - $current[$j]), 2);
    }
    if (sqrt($val) % 10 === 0) $c++;
}

echo $c;
