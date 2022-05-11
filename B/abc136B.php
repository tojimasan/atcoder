<?php

fscanf(STDIN, '%d', $n);
$c = 0;

for ($i = 1; $i <= $n; $i++) {
    if ($i != pow(10,5) && $i >= pow(10,4)) {
        $c++;
    } else if ($i >= pow(10,3)) {
        continue;
    } else if ($i >= pow(10,2)) {
        $c++;
    } else if ($i >= pow(10,1)) {
        continue;
    } else {
        $c++;
    }
}
echo $c;
