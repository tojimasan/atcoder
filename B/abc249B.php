<?php
fscanf(STDIN, '%s', $s);
$arr = str_split($s);
$arr = array_unique($arr);

$pattern_lower = '/[a-z]/';
$pattern_upper = '/[A-Z]/';
if (preg_match($pattern_lower, $s) && preg_match($pattern_upper, $s) && count($arr) === strlen($s)) {
    echo 'Yes';
} else {
    echo 'No';
}
