<?php
fscanf(STDIN, '%d', $n);
$a = explode(' ', trim(fgets(STDIN)));
$ans = 1;
 
for ($i = 0; $i < $n; $i++) {
  if ($a[$i] == 0) {
    echo 0;
    exit;
  }
  $ans *= $a[$i];
}
if ($ans > 10**18) {
  echo -1;
  exit;
}
echo $ans;
