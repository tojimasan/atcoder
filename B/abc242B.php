<?php
fscanf(STDIN, '%s', $s);
$s = str_split($s);
sort($s);
echo implode('', $s);
