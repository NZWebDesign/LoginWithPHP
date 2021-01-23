<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
 
</head>
<body>

<?php
echo "<h1>Login form based on this You Tube video</h1>"
echo "<p>https://www.youtube.com/watch?v=O0Ky0tKvsJ8</p>"

?>
    
<form action="welcome.php" method = "post">
    <table align="center">
        <tr>
            <th colspan="2"><h2 align="center" >Login</h2></th>
        </tr>
        <tr>
            <td>Username: </td>
            <td><input type="text" name="uname"></td>
        </tr>
        <tr>
            <td>Password: </td>
            <td><input type="password" name="pwd"></td>
        </tr>
        <tr>
            <td align="right" colspan="2"><input type="submit" name="login" value="login"></td>
        </tr>
    </table>

</form>

</body>
</html>