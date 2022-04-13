<?php
fscanf(STDIN, '%d', $n);
for ($i = 1; $i <= 9; $i++) {
  for ($j = 1; $j <= 9; $j++) {
    if ($i*$j === $n) {
      echo 'Yes';
      exit;
    }
  }
}
echo 'No';
