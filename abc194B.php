<?php
$n = trim(fgets(STDIN));
$s = [];
 
for ($i = 0; $i < $n; $i++) {
  fscanf(STDIN, '%d%d', $a, $b);
  $s[] = [$a,$b];
}
 
$min = $s[0][0] + $s[0][1];
// 両方のタスクを同じ人がやった場合
for ($i = 1; $i < count($s); $i++) {
  $sum = $s[$i][0] + $s[$i][1];
  if ($min > $sum) {
    $min = $sum;
  }
}
 
// タスクを分担してやった場合
for ($i = 0; $i < count($s); $i++) {
  for($j = 0; $j < count($s); $j++) {
    if ($i !== $j) {
      $longer = $s[$i][0] > $s[$j][1] ? $s[$i][0] : $s[$j][1];
      $min = $min > $longer ? $longer : $min;
    }
  }
}
 
echo $min;
<?php
$n = trim(fgets(STDIN));
$s = [];

for ($i = 0; $i < $n; $i++) {
  fscanf(STDIN, '%d%d', $a, $b);
  $s[] = [$a,$b];
}

$min = $s[0][0] + $s[0][1];
// 両方のタスクを同じ人がやった場合
for ($i = 1; $i < count($s); $i++) {
  $sum = $s[$i][0] + $s[$i][1];
  if ($min > $sum) {
    $min = $sum;
  }
}

// タスクを分担してやった場合
for ($i = 0; $i < count($s); $i++) {
  for($j = 0; $j < count($s); $j++) {
    if ($i !== $j) {
      $longer = $s[$i][0] > $s[$j][1] ? $s[$i][0] : $s[$j][1];
      $min = $min > $longer ? $longer : $min;
    }
  }
}

echo $min;

