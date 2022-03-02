<?php
fscanf(STDIN, '%d', $n);
$s = 0;
for ($i = 1; $i <= $n; $i++) $s+=$i;
echo 4 * $s - array_sum(explode(' ', trim(fgets(STDIN))));
