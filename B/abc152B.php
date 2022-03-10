<?php
fscanf(STDIN, '%d%d', $a, $b);
echo $a < $b ? str_repeat($a, $b) : str_repeat($b, $a);
