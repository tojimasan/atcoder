<?php
$n = trim(fgets(STDIN));
$s = trim(fgets(STDIN));
for ($i = 0; $i < strlen($s); $i++) {
	if ($s[$i] === '1') {
		if ($i % 2 === 0) {
			echo 'Takahashi';
			break;
		} else if ($i % 2 === 1) {
			echo 'Aoki';
			break;
		}
	}
}
