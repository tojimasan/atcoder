<?php
fscanf(STDIN, '%d%d%d', $n, $k, $m);

$cur_sum = array_sum(explode(' ', trim(fgets(STDIN))));
$gap = $n * $m - $cur_sum;

// すでに平均点を超えている場合には0にする
if ($gap < 0) {
    $gap = 0;
}
// 各テストの満点が超えている場合には-1
echo $gap > $k ? -1 : $gap;
