<?php
  $n = trim(fgets(STDIN));
  $ans = 0;
  for ($i = 0; 2**$i<=$n; $i++) {
    $ans = $i;
  }
  echo $ans;
