

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form method="post" action="controller.php">       
            <table>
                <tr>
                    <td>
                    Họ Tên: 
                    <input type="text" name="hoten" placeholder="Họ tên" >
                    </td>
                </tr>

                <tr>
                    <td>
                    Username: 
                    <input type="text" name = "user" placeholder="Username" require>
                    </td>
                </tr>    
       
                <tr>
                    <td>
                    Password: 
                    <input type="password" name = "pass" placeholder="Password" require>
                    </td>
                </tr>

                <tr>
                    <td>
                    Email: 
                    <input type="Email" name="email" placeholder="Email" >
                    </td>
                </tr>

                <tr>
                    <td>
                    Ngày sinh: 
                    <input type="date" name="birth">
                    </td>
                </tr>
                
                <tr>
                    <td>
                    Giới tính:
                    <select name="gender" >
                        <option value="nam">Nam</option>
                        <option value="nu">Nữ</option>
                    </select>
                    </td>
                </tr>  

                <tr>
                    <td>
                     <input type="submit" name = "submit" value="register"> 
                     <button><a href="login.php">Login</a></button>
                    </td>
                </tr>   
            </table>
        </form>   
</body>
</html>