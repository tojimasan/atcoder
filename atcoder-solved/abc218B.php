<?php
$p = array_map('intval', explode(' ', fgets(STDIN)));
$a = '';
for ($i = 0; $i < count($p); $i++) {
	$a .= chr(96+$p[$i]);
}
echo $a;
