<?php
fscanf(STDIN, '%d%d', $a, $b, $k);
$i = 0;
while ($a < $b) {
    $i++;
    $a *= $k;
}
echo $i;
