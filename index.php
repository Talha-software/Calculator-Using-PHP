<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="./style.css">
</head>

<body>
  <?php
  if (isset($_POST['count'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
  
  switch ($operation) {
    case 'addition':
      $result = $num1 + $num2;
      break;
    case 'subtraction':
      $result = $num1 - $num2;
      break;
    case 'multiplication':
      $result = $num1 * $num2;
      break;
    case 'division':
      $result = $num1 / $num2;
      break;
  }
};
  ?>
  <div class="calculator">
  <h1 class="title">Calculaor</h1>
  <form action="" method="post">
    <input type="text" name="num1" autocomplete="off" class="num">
    <input type="text" name="num2" autocomplete="off" class="num">
    <select name="operation" class="opt">
      <option value="addition">+</option>
      <option value="subtraction">-</option>
      <option value="multiplication">*</option>
      <option value="division">/</option>
    </select>
    <input type="submit" name="count" value="count" class="button">
    <?php
    if (isset($_POST['count'])) {
    ?>
      <input type="text" value="<?php echo $result; ?>" class="num"> <?php
                                                                    } else {
                                                                      ?>
      <input type="text" value="0" class="num">
    <?php
                                                                    }
    ?>

  </form>
  </div>
</body>

</html>