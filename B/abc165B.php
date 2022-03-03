<?php
fscanf(STDIN,'%d',$x);
$c = 100;
$y = 0;
while ($c < $x) {
  $c = $c + intdiv($c, 100);
  $y++;
}
echo $y;
