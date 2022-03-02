<?php
$s = trim(fgets(STDIN));
$t = trim(fgets(STDIN));
 
for ($i = 0; $i < strlen($s); $i++) {
    if ($s[$i] !== $t[$i]) {
        $tmp = $s[$i];
        $s[$i] = $s[$i+1];
        $s[$i+1] = $tmp;
        break;
    }
}
echo $s === $t ? 'Yes' : 'No';
