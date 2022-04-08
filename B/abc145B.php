<?php
fscanf(STDIN, '%d', $n);
fscanf(STDIN, '%s', $s);
$len = strlen($s);
$a = substr($s, 0, $len/2);
$b = substr($s, $len/2);
if ($a === $b) {
  echo 'Yes';
  exit;
}

echo 'No';
