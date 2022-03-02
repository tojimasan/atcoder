<?php
fscanf(STDIN, '%d%d', $n, $k);
for ($i=1;$i<=$n;$i++) {
	for ($j =1;$j<=$k;$j++) {
		$ans+=100*$i+$j;
	}
}
echo $ans;
