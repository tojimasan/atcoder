<?php
$n = trim(fgets(STDIN));
$a = array_map('intval', explode(' ', trim(fgets(STDIN))));
$b = $a;
sort($a);
for ($i = 0; $i < count($b); $i++) {
	if ($a[count($a)-2] === $b[$i]) {
		break;
	}
}
echo $i+1;
