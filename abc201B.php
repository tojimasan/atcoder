<?php
fscanf(STDIN, "%d", $n);
$s = [];
$t = [];
for($i=0; $i<$n; $i++){
    fscanf(STDIN, "%s %d", $s[$i], $t[$i]);
}
array_multisort($t, SORT_DESC, $s);
 
echo $s[1];
