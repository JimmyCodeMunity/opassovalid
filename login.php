<?php
@include('connection.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
</head>
<body>
    <form action="insert.php" method="post">
        <h1>Login</h1>
        <br>
        <br>
        Firstname:
        <br>
        <input type="text" name="fname" required>
        <br>
        Lastname:
    </br>
        <input type="text" name="lname">
        
        <br>
        <button name="createuser">Submit</button>
    </form>
    
</body>
</html>