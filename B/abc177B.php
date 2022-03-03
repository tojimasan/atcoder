<?php
$s = trim(fgets(STDIN));
$t = trim(fgets(STDIN));
$c = [];
 
for ($i = 0; $i < strlen($s) - strlen($t) + 1; $i++) {
  $str = substr($s, $i, strlen($t));
  $k = 0;
  for ($j = 0; $j < strlen($str); $j++) {
    if ($str[$j] != $t[$j]) $k++;
  }
  $c[] = $k;
}
 
echo min($c);
