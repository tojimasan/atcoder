<?php
 
fscanf(STDIN, '%d', $n);
$p = explode(' ', trim(fgets(STDIN)));
$c = 0;
 
for ($i = 1; $i <= $n; $i++) {
    if ($i != $p[$i-1]) {
        $c++;
    }
}
 
if ($c === 0 || $c === 2) {
    echo 'YES';
} else {
    echo 'NO';
}
