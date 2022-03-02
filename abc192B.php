<?php
$s = trim(fgets(STDIN));
$ans = 'Yes';
for ($i = 0; $i < strlen($s); $i++) {
  if (($i % 2 == 0 && ctype_upper($s[$i])) || ($i % 2 != 0 && ctype_lower($s[$i]))) {
    $ans = 'No';
    break;
  }
}
echo $ans;
