<?php
fscanf(STDIN, '%d%d', $n, $k);
$H = explode(' ', trim(fgets(STDIN)));
$c = 0;
foreach($H as $h) {
  if ($h >= $k) {
    $c++;
  }
}
echo $c;
