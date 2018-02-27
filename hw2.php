<?php
$x = $_GET['x'];
$y = 1;
$z = 1;
while (is_int($x))  { 
  if ($y > $x) {
  echo "Задуманное число НЕ входит в числовой ряд";
  break;
  }
  elseif ($y == $x) {
  echo "Задуманное число входит в числовой ряд";
  break;
  }
  else {
    $q = $y;
    $y=$y+$z;
    $z = $q;
  }
}
?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <title>Homework 2</title>
</head>
<style>
  body form {
    background: #0b0b0b;
    color: #7e8287;
    margin: 0 auto;
    padding: 3.25em 0;
    text-align: center;
    text-transform: uppercase;
    font-family: sans-serif;
  }

  form input {
    text-transform: uppercase;
    text-align: center;
    font-size: 1em;
    line-height: 2.95em;
    background: #0b0b0b;
    color: #7e8287;
    border: none;
    border-bottom: 1px solid #898989;
    margin: 25px auto;
}

  button {
    display: block;
    text-transform: uppercase;
    width: 197px;
    height: 47px;
    background: #cfc91d;
    border: none;
    font-size: 14px;
    font-weight: 800;
    letter-spacing: 2.4px;
    margin: 10px auto;
  }

  button:hover {
    background: #02918c;
    opacity: 0.5;
    color: #ffffff;
    outline: none;
  }
</style>

<body>
  <form name="mainform" method="GET" action="<?=$_SERVER['PHP_SELF']?>">
    <p>Введите число</p>
    <input type="text" name="x">
    <button type="submit">submit</button>
  </form>
</body>

</html>
