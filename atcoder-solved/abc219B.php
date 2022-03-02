<?php
$s = [];
for ($i = 1; $i <= 3; $i++) {
	$s[$i] = trim(fgets(STDIN));
}
$t = trim(fgets(STDIN));
$ans = '';
for ($i = 0; $i < strlen($t); $i++) {
	$ans .= $s[$t[$i]];
}
echo $ans;
