<?php
fscanf(STDIN, '%d%d', $h, $n);
$a = explode(' ', trim(fgets(STDIN)));
echo array_sum($a) >= $h ? 'Yes' : 'No';
