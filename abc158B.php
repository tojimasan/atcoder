<?php
fscanf(STDIN, '%d%d%d', $n, $a, $b);
echo intdiv($n, $a+$b) * $a + min(($n % ($a+$b)), $a);
