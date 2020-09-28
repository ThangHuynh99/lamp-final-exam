<?php
      include('connection.php');
      if(isset($_POST['submit']) && $_POST['tentg'] != '' && $_POST['tensach'] != '')
      {
          $tensach = $_POST['tensach'];
          $tentg = $_POST['tentg'];
          $dongia = $_POST['dongia'];
          $ngayph = $_POST['date'];

          $sql = "INSERT into tb2(Tensach, Tentacgia, Dongia, Ngayphathanh) values('$tensach', '$tentg', '$dongia', '$ngayph')"; 
          mysqli_query($conn, $sql);
          echo "insert thành công !";
          header('location:view.php');
      }
?>