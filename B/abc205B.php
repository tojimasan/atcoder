<?php
$n = fgets(STDIN);
$a = explode(' ', fgets(STDIN));
$u = array_unique($a);
echo $a == $u ? 'Yes' : 'No';
