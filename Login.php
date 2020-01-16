<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
</head>
<body>

    <?php  
        include("Logindb.php");
    ?>

<h2>Login Form</h2>

<form action="Logindb.php" method="post">
    <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button name="submit" type="submit">Login</button>
</form>

</body>
</html>