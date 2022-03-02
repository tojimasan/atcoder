<?php
  $ans = 0;
  $str = trim(fgets(STDIN));
  $arr = explode(" ", $str);
  $s = $arr[0];
  $t = $arr[1];
  for ($a = 0; $a <= $s; $a++) {
    for ($b = 0; $b <= $s-$a; $b++) {
      for ($c = 0; $c <= $s-$a-$b; $c++) {
        if ($a+$b+$c <= $s && $a*$b*$c <= $t) {
          $ans += 1;
        }
  	  }
    }
  }
  echo $ans;
