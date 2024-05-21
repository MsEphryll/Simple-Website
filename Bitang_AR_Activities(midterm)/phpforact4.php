<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculator</title>
  <style>
    .answer {
      justify-content: center;
      border-style: none;
      border-radius: 20px;
      min-height: 66px;
      width: 500px;
      resize: vertical;
      margin: auto;
      text-align: center;
      font-size:50px;
      font-family: initial;
      margin-top: 150px;
      display: flex;
      padding: 10px;
      box-shadow: 5px 10px #eb6864;
      background-color: #f2b6b4;
      /* background: #eb6864; */
    }
  </style>
</head>
<body style="background-color: #fce2e2">
<?php 
  $num1 = $num2 = $oper = $answer = $infotext = "";

  if(isset($_POST['btnSolve'])) 
{ 
    $num1   = $_POST['txtNum1'];
    $num2   = $_POST['txtNum2'];
    $oper   = $_POST['txtOper'];

    switch ($oper) {
      case "Addition":
        $answer = $num1 + $num2;
        $infotext = $num1." + ".$num2;
        break;
      case "Subtraction":
        $answer = $num1 - $num2;
        $infotext = $num1." - ".$num2;
        break;
      case "Multiplication":
        $answer = $num1 * $num2;
        $infotext = $num1." x ".$num2;
        break;
      case "Division":
        if ($num2 == 0) {
          $answer =  "cannot divide a number with zero!";
        } else {
          $answer = $num1 / $num2;
          $infotext = $num1." / ".$num2;
          
        }
        break;
          
    }

    $answer='<div class="answer">'.$infotext.' = '.$answer.'</div>';
    echo $answer;   
  }
?>

  <div style="padding:20px; margin: auto;">
    <a href="pv.php" style="text-decoration: none; font-size: 14px;"><img src="images/arrow.png" style="height: 10px; width: 10px;"> Go Back</a>
  </div>
</body>
</html>