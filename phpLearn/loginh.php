<!DOCTYPE html>
<html>
<head>
	<title>Bank App</title>
	<link rel="stylesheet" type="text/css" href="res/bootstrap.min.css">
	<script type="" src="res/bootstrap.min.js"></script>
    <script type="" src="res/jquery 3.3.1.js"></script>
    <style>
        body{
            /* background-color: orangered; */
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            color: white;
            background: url(img/a2.jpg) no-repeat center;
             /* no-repeat center bottom */
        }
        .container{
            /* background-color: aquamarine !important; */
            /* opacity: 0.9; */
            position: relative;
            top: 200px;
            padding: 20px;
            border-radius: 5px;
        }
        #signup{
            position: relative;
            left: 80px;
            bottom: 38px;
        }
        #title{
            background-color: orangered;
            opacity: 0.5;
        }
        #title h1{
            font-size: 100px !important;
            text-align: center;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            color: lightblue;
        }
    </style>
</head>
<body>
        <div id="title" class="jumbotron">
            <h1>Bank App</h1>
        </div>
    <div class="container" style="margin-top:-100px">
        <?php
        if (isset($msg)) {
                # code...
                echo "<p class='text-warning' style='text-align:center'>$msg</p>";
            }
        ?>
        <form class="col-md-6 mx-auto shadow pt-4 pd-4" action="login.php" method="POST">
            <div class="form-group">
                <label for="usr">Username:</label>
                <input type="text" required  class="form-control" id="usr" name="username">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" required  class="form-control" id="pwd" name="password">
            </div>
                <button type="submit" class="btn btn-primary">Log in</button>
                <p>Not yet registered? <a href="signuph.php">Sign up</a></p>
                
        </form>
    </div>
    
</div>
</body>
</html>