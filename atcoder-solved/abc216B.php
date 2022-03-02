<?php
$n = intval(trim(fgets(STDIN)));
$people = [];
$ans = 'No';
 
for ($i = 0; $i < $n; $i++) {
	$people[] = trim(fgets(STDIN));
}
 
for ($i = 0; $i < $n-1; $i++) {
	for ($j = $i+1; $j < $n; $j++) {
		if ($people[$i] === $people[$j]) {
			$ans = 'Yes';
		}
	}
}
 
echo $ans;
