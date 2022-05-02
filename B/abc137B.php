<?php

fscanf(STDIN, '%d%d', $k, $x);
$from = $x - ($k - 1) >= -1000000 ? $x - ($k - 1) : -1000000;
$to = $x + ($k - 1) <= 1000000 ? $x + ($k - 1) : 1000000;

for ($i = $from; $i <= $to; $i++) {
    echo $i . ' ';
}
