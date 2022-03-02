<?php
fscanf(STDIN, '%s', $n);
$c = 0;
for ($i=0; $i < strlen($n); $i++) { 
  $c += $n[$i];
}
echo $c % 9 == 0 ? 'Yes' : 'No';
