<?php
fscanf(STDIN, '%d', $n);
$a = explode(' ', trim(fgets(STDIN)));
$b = explode(' ', trim(fgets(STDIN)));
$ans_same = 0;
$ans_dif = 0;

for ($i = 0; $i < $n; $i++) {
    if ($a[$i] === $b[$i]) {
        $ans_same++;
    } else if (in_array($a[$i], $b)){
        $ans_dif++;
    }
}

echo $ans_same . PHP_EOL;
echo $ans_dif;
