<?php
$s = trim(fgets(STDIN));
$ans = '';
 
for ($i = strlen($s)-1; $i >= 0; $i--) {
	$currS = $s[$i];
	if ($currS === '6') {
		$currS = '9';
	} else if ($currS === '9') {
		$currS = '6';
	}
	$ans .= $currS;
}
echo $ans;
