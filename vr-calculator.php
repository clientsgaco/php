<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Mô phỏng máy tỉnh điện tử</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>

  <!-- PHP -->
  <?php 
    $n1         = "";
    $n2         = "";
    $calculate  = "";
    $flag  = "";
    if(isset($_POST["number1"]) && isset($_POST["number2"]) && isset($_POST["calculate"])){
    $n1 = $_POST["number1"];
    $n2 = $_POST["number2"];
    $calculate = $_POST["calculate"];
    if(is_numeric($n1) && is_numeric($n2)){
      switch($calculate){
        case "+":
          $result = $n1 + $n2;
          break;
        case "-":
          $result = $n1 - $n2;
          break;
        case "*":
        case "x":
          $result = $n1 * $n2;
          break;
        case ":":
        case "/":
          $result = $n1 / $n2;
          break;
        case "%":
          $result = $n1 % $n2;
          break;
        default:
          $result     = $n1 + $n2;
          $calculate  = "+";
          break;
      }
    }else{
      $result = "Không thực hiện được!";
      $flag = true;
    };
};
    ?>
  <!-- PHP -->
  <div class="content">
    <h1>Mô phỏng máy tỉnh điện tử</h1>
    <form action="#" method="post" name="main-form">
      <div class="row">
        <span>Số thứ nhất</span>
        <input type="text" name="number1" value="<?php echo $n1?>" />
      </div>
      <div class="row">
        <span>Phép toán</span>
        <input type="text" name="calculate" value="<?php echo $calculate?>" />
      </div>
      <div class="row">
        <span>Số thứ hai</span>
        <input type="text" name="number2" value="<?php echo $n2?>" />
      </div>
      <div class="row">
        <input type="submit" value="Xem kế quả" name="submit" />
      </div>
      <div class="row">
        <p><?php
        if($flag==true){
          echo $result;
        }else {
        echo $n1 . ' ' . $calculate . ' ' . $n2 . ' = ' . $result;
        }        
        ?></p>
      </div>
    </form>
  </div>
</body>

</html>