<?php
$s = [];
for ($i = 0; $i < 4; $i++) {
	$s[] = trim(fgets(STDIN));
}
$uniq_s = array_unique($s);
echo count($uniq_s) === 4 ? 'Yes' : 'No';
