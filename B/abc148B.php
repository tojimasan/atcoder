<?php
fscanf(STDIN, '%d', $n);
list($s, $t) = explode(' ', trim(fgets(STDIN)));

for ($i = 0; $i < $n; $i++) {
    echo $s[$i];
    echo $t[$i];
}
