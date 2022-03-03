<?php
$k = fgets(STDIN);
$arr = explode(' ', trim(fgets(STDIN)));
$a = base_convert($arr[0], $k, 10);
$b = base_convert($arr[1], $k, 10);
 
echo $a*$b;
