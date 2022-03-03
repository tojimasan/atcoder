<?php
$n = (int)(fgets(STDIN));
$c = 0;
$i = 1;
while (true) {
	$c += $i;
	if ($c >= $n) {
		echo $i;
		break;
	}
	$i++;
}
