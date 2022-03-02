<?php
fscanf(STDIN,'%d%d',$h,$w);
$a = [];
for ($i = 0; $i < $h; $i++) {
  $a[] = explode(' ', trim(fgets(STDIN)));
}
 
for ($i = 0; $i < $w; $i++) {
  for ($j = 0; $j < $h; $j++) {
    echo $a[$j][$i]  . ' ';
  }
  echo "\n";
}
