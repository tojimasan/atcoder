<?php
fscanf(STDIN, '%d%d', $n, $k);
$a = explode(' ', trim(fgets(STDIN)));
$b = explode(' ', trim(fgets(STDIN)));

$taste = max($a);

for ($i = 0; $i < $k; $i++) {
    if ($a[$b[$i]-1] == $taste) {
        echo 'Yes';
        exit;
    }
}

echo 'No';
