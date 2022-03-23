<?php
fscanf(STDIN, '%d', $n);
$T = str_split(trim(fgets(STDIN)));
$x = 0;
$y = 0;
$direction_idx = 0;

foreach($T as $t) {
    if ($t === 'S') {
        $correct_direction = $direction_idx % 4;
        if ($correct_direction === 0) {
            $x++;
        } else if ($correct_direction === 1) {
            $y--;
        } else if ($correct_direction === 2) {
            $x--;
        } else {
            $y++;
        }
    } else if ($t === 'R') {
        $direction_idx++;
    }
}

echo $x . ' ' . $y . PHP_EOL;
