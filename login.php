<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form  method="post" action="controller.php">     
            <table>
                <tr>
                    <td>
                        Username: 
                        <input type="text" name = "user" placeholder="Username" required>
                    </td>
                </tr>    

                <tr>
                    <td>
                        Password: 
                        <input type="password" name = "pass" placeholder="Password" required>
                    </td>
                </tr>

                <tr>
                    <td>
                     <input type="submit" name = "submit" value="login" >
                     <button><a href="register.php">Register</a></button>
                     </td>
                </tr>    
            </table>
        </form>
    </div>
</body>
</html>