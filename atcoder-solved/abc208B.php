<?php
$p = intval(trim(fgets(STDIN)));
$ans = 0;
$i = 10;
 
while ($p > 0) {
	$tmp = gmp_fact($i);
	if ($tmp <= $p) {
		$p -= $tmp;
		$ans++;
	} else {
		$i--;
	}
	if ($p <= 0) {
		break;
	}
}
 
echo $ans;
