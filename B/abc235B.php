<?php
fscanf(STDIN, '%d', $n);
$h = explode(' ', trim(fgets(STDIN)));
 
for ($i = 0; $i < $n-1; $i++) {
  if ($h[$i] >= $h[$i+1]) {
    echo $h[$i];
    exit;
  }
}
echo $h[$n-1];
