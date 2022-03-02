<?php
fscanf(STDIN, '%d', $n);
$a = explode(' ', trim(fgets(STDIN)));
$b = explode(' ', trim(fgets(STDIN)));
 
for ($i=0;$i<$n;$i++) {
  $sum+=$a[$i]*$b[$i];
}
 
echo $sum == 0 ? 'Yes' : 'No';
