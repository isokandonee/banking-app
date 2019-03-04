<?php
session_start();
require 'connect.php';
$us = $_POST['username'];
$pa = sha1($_POST['password']);
$log=true;
$save=mysqli_query($conn,"select * from user_registration where username='$us' and password='$pa'");
while ($r=mysqli_fetch_array($save)) {
    $log=false;
    $_SESSION['unames']=$r['username'];
    $_SESSION['pass']=$r['password'];
}
if ($log) {
    $msg='Login failed! Invalid username or password';
    include 'indexer.php';
}
else{
    echo "<script>alert('Login successful')</script>";
    header('location:index.php');
}

?>


