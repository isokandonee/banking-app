<?php
    include('server.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sign up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <div class="header">
        <h2>Register</h2>
    </div>
    <form action="register.php" method="POST">
        <!-- display validation errors here -->
        <?php include('errors.php');
        ?>
        <div class="input-group">
            <label for="">Username:</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label for="">Email:</label>
            <input type="email" name="email">
        </div>
        <div class="input-group">
            <label for="">Password:</label>
            <input type="password" name="password_1">
        </div>
        <div class="input-group">
            <label for="">Confirm Password:</label>
            <input type="password" name="password_2">
        </div>
        <div class="input-group">
        <button type="submit" name="register" class="btn">Register</button>
        </div>
        <p>Already a member? <a href="login.php">Sign in</a></p>
    </form>
</body>
</html>