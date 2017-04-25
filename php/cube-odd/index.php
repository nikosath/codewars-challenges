<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
<?php
function cube_odd($numArray) {
  $sum = 0;
  foreach ($numArray as $num) {
    if (!is_numeric($num)) {
      return NULL;
    }
    $cube = $num ** 3;
    if ($cube % 2) {
      $sum += $cube;
    }
  }
  return $sum;
}
$numArray = [4, 5, '2'];
echo cube_odd($numArray);
?>
</body>
</html>
