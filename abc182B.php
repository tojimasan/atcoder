<?php
fscanf(STDIN, '%d', $n);
$a = explode(' ', trim(fgets(STDIN)));
$gcds = [];
 
for ($i = 0; $i < count($a); $i++) {
  for ($j = 2; $j <= $a[$i]; $j++) {
    if ($a[$i] % $j == 0) {
      $gcds[$j]++;
    }
  }
}
arsort($gcds);
echo array_key_first($gcds);
