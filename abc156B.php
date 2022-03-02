<?php
fscanf(STDIN, "%d%d", $n, $k);
echo strlen(base_convert(strval($n), 10, $k));
