<?php
$n = trim(fgets(STDIN));
$c = [];
for ($i = 0; $i < $n-1; $i++) {
  fscanf(STDIN, '%d%d', $a, $b);
  if (!isset($c[$a])) {
    $c[$a] = 0;
  }
  if (!isset($c[$b])) {
    $c[$b] = 0;
  }
  $c[$a]++;
  $c[$b]++;
}
 
for ($i = 1; $i <= $n; $i++) {
  if ($c[$i] == ($n-1)){
    echo 'Yes';
    exit;
  }
}
 
echo 'No';
