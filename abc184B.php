<?php
fscanf(STDIN, '%d%d', $n, $x);
$s = trim(fgets(STDIN));
for ($i = 0; $i < strlen($s); $i++) {
 $x += $s[$i] == 'o' ? 1 : -1;
 if ($x < 0) $x = 0;
}
echo $x;
