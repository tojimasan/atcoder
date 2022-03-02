<?php
fscanf(STDIN, '%d', $n);
$c = 0;
$ans = 'No';
 
for ($i = 0; $i < $n; $i++) {
  list($a, $b) = explode(' ', trim(fgets(STDIN)));
  if ($a == $b) {
    $c++;
    if ($c >= 3) $ans = 'Yes';
  } else {
    $c = 0;
  }
}
echo $ans;
