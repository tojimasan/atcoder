<?php
fscanf(STDIN, "%d", $n);
$a = explode(' ', trim(fgets(STDIN)));
 
for ($i = 0; $i < $n; $i++) {
  if ($a[$i] % 2 == 0 && ($a[$i] % 3 != 0 && $a[$i] % 5 != 0)) {
    echo 'DENIED';
    exit;
  }
}
echo 'APPROVED';
