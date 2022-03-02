<?php
$s = trim(fgets(STDIN));
$t = trim(fgets(STDIN));
$c = 0;
 
for ($i = 0; $i < strlen($s); $i++) {
  if ($s[$i] != $t[$i]) $c++;
}
echo $c;
