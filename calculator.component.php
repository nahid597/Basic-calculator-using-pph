<!DOCTYPE html> 

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="calculator.css">
        <style>
            <?php  include "./calculator.css" ?>;
        </style>
    </head>

    <body>

        <form action="calculator.component.php" method="post">
          Enter 1st number:   <input type = "number" step="0.0000001" name="num1" id="num1"><br>
          Enter operation:   <input type = "text" name="operation" id = "operation"><br>
          Enter 2nd number:   <input type = "number" step="0.0000001" name="num2" id="num2"><br>

          <input class="btn btn-primary" type="submit" id="submit">

        </form>
        <br>

        <?php 
            include'./calculator.php';
        ?>

    </body>

</html>