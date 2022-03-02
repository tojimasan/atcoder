<?php
$s = trim(fgets(STDIN));
$s_len = strlen($s);
$a = [];
 
for ($i = 0; $i < $s_len; $i++) {
  $s_first = $s[0];
  $s = substr($s, 1) . $s_first;
  $a[] = $s;
}
 
rsort($a);
echo $a[$s_len-1] . "\n";
echo $a[0];
