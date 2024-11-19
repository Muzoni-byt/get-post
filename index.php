<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <!-- <form action="index.php" method="post">
        <label>username:</label>
        <input type="text" name="username"><br>
        <label>password:</label>
        <input type="password" name="password"><br>
        <input type="submit" value="log in">
    </form>  -->

     <form action="index.php" method="post">
        <label>quantity</label><br>
        <input type="text" name="quantity"><br>
        <input type="submit" value="total">
    </form> 
</body>
</html>
<?php
//  if(isset ($_POST["username"] ["password"] ))
//  {
//   echo"{$_POST["username"]} <br>";
//   echo"{$_POST["password"]} <br>";
//  }
   
   $item="pizza";
   $price=8.43;
   $total=null;

   if(isset($_POST["quantity"]))
   {
   $quantity = $_POST["quantity"];//result stored in a local variable
   $total=$quantity*$price;

   echo"you have ordered {$quantity} x {$item}/s";
   echo"your total is : \${$total}";
  }
?>