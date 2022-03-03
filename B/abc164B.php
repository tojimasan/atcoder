<?php
fscanf(STDIN,'%d%d%d%d',$a,$b,$c,$d);
 
while ($a > 0 && $c > 0) {
  $a -= $d;
  $c -= $b;
  if ($c <= 0) {
    echo 'Yes';
    exit;
  }
}
echo $a > 0 ? 'Yes' : 'No';
