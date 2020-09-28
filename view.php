<?php
   session_start();
   if(!isset($_SESSION['user'])){
       header('location:login.php');
   }
    include('controller.php');
    $control = new Controller();
    $control->view();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="controller.php" method="post">
      <div>
        <input type="submit" name="submit" value="logout">
        <button><a href="insert.php">Thêm sách</a></button>
      </div>
    </form>
    
    
</body>
</html>