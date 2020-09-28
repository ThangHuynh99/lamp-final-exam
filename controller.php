<?php

class Controller{
   
   public   $username;
   public   $password;
   public   $email;
   public   $fullname;
   public   $birthday;
   public   $tensach;
   public   $tentg;
   public   $dongia;
   public   $ngayph;

   public function login()
    {
        include('connection.php');
        session_start();
        if ($_POST["user"] != '' && $_POST["pass"] != '' ){
            $username = $_POST["user"];
            $password = $_POST["pass"];
        
    
            $sql = "Select * from tb1 where Username = '$username' and Password = '$password'";
            $user = mysqli_query($conn, $sql);
            if(mysqli_num_rows($user) > 0 )
            {
                echo "Bạn đã đăng nhập thành công";
                $_SESSION["user"] = $username;
                header('location:insert.php');		
            }
            else
            {
                echo "<script> alert('Bạn đã nhập sai username hoặc password hoặc sai captcha')</script>";
                header('location:login.php');
            }
        }
    }

    public function register()
    {
        include('connection.php');
        if(isset($_POST['submit']) && $_POST["username"] != '' && $_POST["password"] != '')
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
            $sql = "SELECT * FROM tb1 where username = '$username' ";
            $old = mysqli_query($conn, $sql);
            $password = md5($password);
            if(mysqli_num_rows($old) > 0){
                echo "username đã tồn tại, vui lòng nhập username khác !";
                header('location:register.php');
                die();
            }
          
            $sql = "INSERT into tb1(Username, Password, Email, Fullname, Birthday, Gender) values('$username', '$password', '$email', '$fullname', '$birthday', '$gender')";
            mysqli_query($conn, $sql);
            echo "Bạn đã đăng ký thành công !";
            header('location:login.php');
         
        }
    }

    public function logout(){
        session_start();
        session_destroy();
        header('location:login.php');
    }

    public function insertSach(){
        session_start();
        if(!isset($_SESSION['user'])){
            header('location:login.php');
        }
        include('connection.php');

        if(isset($_POST['submit']))
        {
            $tensach = $_POST['tensach'];
            $tentg = $_POST['tentg'];
            $dongia = $_POST['dongia'];
            $ngayph = $_POST['date'];

            $sql = "INSERT * INTO tb2(Tensach, Tentacgia, Dongia, Ngayphathanh) Values('$tensach', '$tentg', '$dongia', '$ngayph'"; 
            mysqli_query($conn, $sql);
            echo "inser thành công !";
            header('location: insert.php');
        }
    }

    public function view(){
        include('connection.php');
        session_start();
        if(!isset($_SESSION['user'])){
            header('location:login.php');
        }

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
    }
}

    $control = new Controller();

    // if(isset($_POST['login'])){
    //     login();
    // }
   
    
    if(isset($_POST['submit'])){
        $case = $_POST['submit'];
        switch($case){
            case 'login':
                $control->login();
                break;

            case 'register':
                $control->register();
                break;

            case 'insert': 
                $control->insertSach();
                break;

            case 'logout': 
                $control->logout();
                break;

        }
    }

?>