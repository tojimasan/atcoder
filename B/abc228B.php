<?php
fscanf(STDIN, '%d%d', $n, $x);
$a = explode(' ', trim(fgets(STDIN)));
$c = 0;
while(true)
{
  $i = $x-1;
  if ($a[$i] == 0) break;
  $x = $a[$i];
  $a[$i] = 0;
  $c++;
}
echo $c;
