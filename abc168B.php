<?php
fscanf(STDIN, '%d', $n);
$s = trim(fgets(STDIN));
echo strlen($s) > $n ? substr($s, 0, $n) . '...' : $s;
