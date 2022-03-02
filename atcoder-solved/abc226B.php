<?php
fscanf(STDIN, '%d', $n);
for ($i = 0; $i < $n; $i++) {
  $arr[] = trim(fgets(STDIN));
}
echo count(array_unique($arr));
