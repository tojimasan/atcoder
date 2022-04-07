<?php
fscanf(STDIN, '%d', $n);
fscanf(STDIN, '%s', $s);
for ($i = 0; $i < strlen($s); $i++) {
    $next = ord($s[$i]) + $n;
    if ($next >= 91) {
        $next -= 26;
    }
    echo chr($next);
}
