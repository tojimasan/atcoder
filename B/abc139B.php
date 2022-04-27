<?php
fscanf(STDIN, '%d%d', $a, $b);
$count = 0;
$outlet = 1;

while ($outlet < $b)
{
  $count++;
  $outlet--;
  $outlet += $a;
}
echo $count;
