<?php
$n = trim(fgets(STDIN));
$a = explode(' ', trim(fgets(STDIN)));
$b = explode(' ', trim(fgets(STDIN)));
 
sort($a);
sort($b);
echo max(0, $b[0]-$a[$n-1]+1);
