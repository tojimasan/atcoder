<?php
fscanf(STDIN, "%d", $n);
echo count(array_unique(explode(' ', trim(fgets(STDIN)))));
