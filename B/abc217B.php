<?php
$c = ['ABC' => 0,'ARC' => 0,'AGC' => 0,'AHC' => 0];
 
for ($i = 0; $i < 3; $i++) {
	$a = trim(fgets(STDIN));
	$c[$a]+=1;
}
foreach ($c as $key => $value) {
  if ($value === 0) {
    echo $key;
  }
}
