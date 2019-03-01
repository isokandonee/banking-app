<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Log in</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<div class="header">
     <h2>Sign in</h2>
</div>
<form action="login.php" method="POST">
        <div class="input-group">
            <label for="">Username:</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label for="">Password:</label>
            <input type="password" name="password">
        </div>
        <button type="submit" name="register" class="btn">Sign in</button>
        </div>
        <p>Not yet a member? <a href="register.php">Sign up</a></p>
</form>
</body>
</html>