<?php
list($n, $x) = array_map('intval', explode(' ', trim(fgets(STDIN))));
$a = array_map('intval', explode(' ', trim(fgets(STDIN))));
$sum = 0;
for ($i = 0; $i < $n; $i++) {
	if (($i+1) % 2 === 0) {
		$sum += $a[$i] - 1;
	} else {
        $sum += $a[$i];
    }
}
echo $sum <= $x ? 'Yes' : 'No';
