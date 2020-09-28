<?php
   session_start();
   if(!isset($_SESSION['user'])){
       header('location:login.php');
   }
    include('connection.php');
    $sql = "select * from tb2";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)) {
        echo "<table>";
        echo "<tr>";
            echo "<p>". "Sách: " . $row['ID'] . "</p>";
            echo "<p>" . "Tên sách: " . $row['Tensach'] . "</p>";
            echo "<p >" . "Tên tác giả: " . $row['Tentacgia'] . "</p>";
            echo "<p >" . " Đơn giá: " . $row['Dongia'] . "</p>";
            echo "<p >" . " Ngày phát hành: " . $row['Ngayphathanh'] . "</p>";
        echo "</tr>";
        echo "</table>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button><a href="logout_submit.php">logout</a></button>
    <button><a href="insert.php">Thêm sách</a></button>
</body>
</html>