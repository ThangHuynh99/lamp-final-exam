<?php
    session_start();
	$conn = mysqli_connect("localhost", "root", "", "lamp");

	if (isset($_POST['submit']) && $_POST["user"] != '' && $_POST["pass"] != '' ){
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
	else{
		$_SESSION["thongbao"] = "Bạn chưa nhập username hoặc password";
		header('location:login.php');
	}
	
?>