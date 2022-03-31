<?php
fscanf(STDIN, '%s', $s);
$reverse = strrev($s);
$c = 0;

for ($i = 0; $i < intdiv(strlen($s), 2); $i++) {
    if ($s[$i] !== $reverse[$i]) $c++;
}

echo $c;
