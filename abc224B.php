<?php
fscanf(STDIN,'%d%d',$h,$w);
$a = [];
$ans = 'Yes';
for ($i = 0; $i < $h; $i++) {
  $a[] = explode(' ', trim(fgets(STDIN)));
}
 
for ($i_1 = 0; $i_1 < ($h-1); $i_1++) {
  for ($i_2 = $i_1+1; $i_2 < $h; $i_2++) {
    for ($j_1 = 0; $j_1 < ($w-1); $j_1++) {
      for ($j_2 = $j_1+1; $j_2 < $w; $j_2++) {
        if ($a[$i_1][$j_1]+$a[$i_2][$j_2] > $a[$i_2][$j_1]+$a[$i_1][$j_2]) {
          $ans = 'No';
          break 4;
        }
      }
    }
  }
}
echo $ans;
