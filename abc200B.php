<?php
fscanf(STDIN, '%d%d', $n, $k);
 
for ($i = 1; $i <= $k; $i++) {
  if ($n % 200 === 0) {
    $n = intdiv($n, 200);
  } else {
    $n = $n * 1000 + 200;
  }
}
echo $n;
