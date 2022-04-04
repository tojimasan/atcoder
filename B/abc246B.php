<?php
fscanf(STDIN, '%d%d', $x, $y);
$length = sqrt(pow($x, 2) + pow($y, 2));

echo $x * (1 / $length) . ' ' . $y * (1 / $length);
