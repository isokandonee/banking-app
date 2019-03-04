<?php
session_start();
include 'layout.php';
require 'connect.php';
if(isset($_SESSION['unames'])){


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="indexer.css" />
    <script src="main.js"></script>
<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">
<link href="res/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="res/bootstrap.min.js"></script>
<script src="res/jquery.min.js"></script>

</head>
<body>

</body>
</html>
<?php
}
else{
    header('location:loginh.php');
}
?>