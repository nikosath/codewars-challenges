<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
<?php
function printerError($s) {
    $errors = 0;
    $length = strlen($s);
    for ($i = 0; $i < $length; $i++) {
      if ($s[$i] < 'a' || $s[$i] > 'm') {
        $errors += 1;
      }
    }
    return "$errors/$length";
}
echo printerError('aaanaan');
?>
</body>
</html>
