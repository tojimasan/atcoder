<?php
fscanf(STDIN, '%d%d', $n, $x);
$a = explode(' ', trim(fgets(STDIN)));
 
$b = array_filter($a, function($val) use($x){
  return $val != $x;
});
echo implode(' ', $b);
