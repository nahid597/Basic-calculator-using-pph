

<?php

  $num1 = $_POST["num1"];
  $num2 = $_POST["num2"];
  $op = $_POST["operation"];
  
  if($op == "+")
  {
     $sum = $num1 + $num2;
      echo"Result: ". number_format((float)$sum, 2 , '.', '');
  }
  else if($op == "-")
  {
     $sum = $num1 - $num2;
      echo "Result: ". number_format((float)$sum, 2 , '.', '');
  }
 else if($op == "*")
  {
     $sum = $num1 * $num2;
      echo "Result: ". number_format((float)$sum, 2 , '.', '');
  }
 else if($op == "/")
  {
     $sum = $num1 / $num2;
      echo "Result: ". number_format((float)$sum, 2 , '.', '');
  }
  else
  {
      echo "Invalid operation";
  }
?>