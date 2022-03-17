<?php
fscanf(STDIN, '%d', $n);
fscanf(STDIN, '%s', $s);

preg_match_all('/ABC/', $s, $matches);
echo count($matches[0]);
