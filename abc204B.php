<?php
$n = fgets(STDIN);
$a = explode(' ', trim(fgets(STDIN)));
$ans = 0;
for ($i = 0; $i < count($a); $i++) {
	if ($a[$i] > 10) {
		$ans += $a[$i] - 10;
	}
}
echo $ans;
