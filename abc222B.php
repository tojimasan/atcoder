<?php
fscanf(STDIN, '%d%d', $n, $p);
$a = explode(' ', trim(fgets(STDIN)));
$c = 0;
for ($i = 0; $i < $n; $i++) {
  if ($a[$i] < $p) $c++;
}
echo $c;
