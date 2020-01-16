<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
</head>
<body>

<?php //include("Logindb.php");
?>

<h2>Medicine Form</h2>

<form action="Dashboard.php" method="post">

  <div class="container">
    <label for="uname"><b>Generic Name</b></label>
    <input type="text" placeholder="Enter Generic Name" name="gname" required>
    <label for="psw"><b>Medicine Type</b></label>
    <input type="text" placeholder="Enter Medicine type" name="mtype" required>
    <label for="psw"><b>Quantity</b></label>
    <input type="text" placeholder="Enter Quantity" name="mqty" required>
    <label for="psw"><b>Price</b></label>
    <input type="text" placeholder="Enter Price" name="price" required>
        
    <button class="submit" type="submit">Delete Medicine</button>
</form>

</body>
</html>