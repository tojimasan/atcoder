<?php
fscanf(STDIN, '%d%d%d%d', $a, $b, $c, $d);
$sums = [];
$sums[] = $a*$c;
$sums[] = $a*$d;
$sums[] = $b*$c;
$sums[] = $b*$d;
echo max($sums);
