<?php
fscanf(STDIN, '%d%d', $n, $k);
$p = explode(' ', trim(fgets(STDIN)));
sort($p);
$p_sliced = array_slice($p, 0, $k);
echo array_sum($p_sliced);
