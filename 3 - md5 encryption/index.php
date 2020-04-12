<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>

    <h1 align="center">Registration Form</h1>

    <form action="register.php" method="post">
    <table border="2" align="center">
        <tr>
            <th>Name</th>
            <td><input type="text" name="name"/></td>
        </tr>
        <tr>
            <th>Username</th>
            <td><input type="text" name="uname"/></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><input type="text" name="email"/></td>
        </tr>
        <tr>
            <th>Password</th>
            <td><input type="password" name="pass"/></td>
        </tr>
        <tr>
            <th>Confirm Password</th>
            <td><input type="password" name="cpass"/></td>
        </tr>
        <tr>
            <td colspan="2" align="center"><input type="submit" value="SUBMIT" name="sub"></td>
        </tr>
    </table>
    </form>

<br><br><br>

<center><a href="login.php">Click Here To Login</a></center>
</body>
</html>