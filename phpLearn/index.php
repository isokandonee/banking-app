<?php
session_start();
require 'connect.php';
if(isset($_SESSION['unames'])){


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Main Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="indexer.css" />
    <script src="main.js"></script>
<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">
<link href="res/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="res/bootstrap.min.js"></script>
<script src="res/jquery.min.js"></script>
<style>
       body{
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            /*  */
            font-size:1.2em;
        }
        #title{
            background-color: purple;
            opacity: 0.2;
            color: white;
        }
        #title h1{
            font-size: 100px !important;
            text-align: center;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            color: white;
        }
        </style>
</head>
<body>
<!-- <div class="jumbotron"> -->
    <h1 id="title">Bank App</h1>
<!-- </div> -->
<div class="menu"> <span></span> </div>
<nav id="nav">
		<ul class="main">
				<li><a href="indexe.php">Sign Up</a></li>
				<li><a href="indexer.php">Log in</a></li>
				<li><a href="logout.php">Log out</a></li>
				<li><a href="#">Digital Marketing</a></li>
				<li><a target="_blank" href="#">Portfolio</a></li>
				<li><a target="_blank" href="#">Contact</a></li>
		</ul>
</nav>
<div class="overlay"></div>
<script>
$('.menu, .overlay').click(function () {
	$('.menu').toggleClass('clicked');
	
	$('#nav').toggleClass('show');
	
});
</script>

</body>
</html>
<?php
}
else{
    header('location:loginh.php');
}
?>