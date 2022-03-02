<?php
$n = trim(fgets(STDIN));
$s = rtrim($n, '0');
 
echo $s === strrev($s) ? 'Yes' : 'No';
