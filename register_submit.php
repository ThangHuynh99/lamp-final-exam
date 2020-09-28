<?php
     include('connection.php');
     if(isset($_POST['submit']) && $_POST["user"] != '' && $_POST["pass"] != '')
     {
         $username = $_POST["user"];
         $password = $_POST["pass"];
         $email    = $_POST["email"];
         $fullname = $_POST["hoten"];
         $birthday = $_POST["birth"];
         if($_POST['gender'] == 'nam')
             $gender = 1;
         else
             $gender = 0;
             $old = 0;

         $old = 0;
         $sql = "SELECT * FROM tb1 where username = '$username' ";
         $old = mysqli_query($conn, $sql);
         $password = md5($password);
         if(mysqli_num_rows($old) > 0){
             echo "username đã tồn tại, vui lòng nhập username khác !";
             header("location:register.php");
             die();
         }
       
         $sql = "INSERT into tb1(Username, Password, Email, Fullname, Birthday, Gender) values('$username', '$password', '$email', '$fullname', '$birthday', '$gender')";
         mysqli_query($conn, $sql);
         echo "Bạn đã đăng ký thành công !";
         header("location:register.php");
      
     }
?>