<?php
fscanf(STDIN,'%d%d',$n,$m);
$total = array_sum(explode(' ', trim(fgets(STDIN))));
echo $n - $total < 0 ? -1 : $n - $total;
