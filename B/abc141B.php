<?php
$s = trim(fgets(STDIN));
for ($i = 0; $i < strlen($s); $i++) {
  if (($i % 2 == 0 && $s[$i] == 'L') || ($i % 2 == 1 && $s[$i] == 'R')) {
    echo 'No';
    exit;
  }
}
echo 'Yes';
