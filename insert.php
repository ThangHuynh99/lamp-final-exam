<?php
	session_start();
	if(!isset($_SESSION["user"])){
		header("location:login.php");
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sach</title>
</head>
<body>
    <form type = "submit" action="insert_submit.php" method="post">
        <table>
            <tr>
                <td>
                    Tên sách:
                    <input type="text" name="tensach" placeholder="Tên sách" required>
                </td>
            </tr>

            <tr>
                <td>
                    Tên tác giả: 
                    <input type="text" name="tentg" placeholder="Tên tác giả" required>
                </td>
            </tr>

            <tr>
                <td>
                    Đơn giá: 
                    <input type="text" name="dongia" placeholder="Đơn giá">
                </td>
            </tr>

            <tr>
                <td>
                    Ngày phát hành: 
                    <input type="date" name="date">
                </td>
            </tr>

            <tr>
                <td>
                     <input type="submit" name="submit" value="insert">
                     <button><a href="view.php">View Sách</a></button>
                </td>
            </tr>   
        </table>
        <button><a href="logout_submit.php">Logout</a></button>
    </form>
</body>
</html>