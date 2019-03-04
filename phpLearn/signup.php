<?php
$fn = $_POST['fname'];
$ph = $_POST['phone'];
$pa = sha1($_POST['pass']);
$vpa = sha1($_POST['valpass']);
$em = $_POST['email'];
$us = $_POST['uname'];
if ($pa === $vpa) {
    # code...
$conn = mysqli_connect('localhost','root','','mitchel');
$insert = mysqli_query($conn,"INSERT into user_registration(name,username,email,phone,password) values('$fn','$us','$em','$ph','$pa')");
// $insert = mysqli_query($conn,'INSERT' 'INTO' `my-users`(`id`, `name`,'username','email', `phone`, `password`) VALUES ([value-1],[$f],[$ph],[$pa]));
if($insert){
    echo "<script>alert('Registration successful!')</script>";
   header('location:indexer.php');
}
else {
    echo "<script>alert('Registration not successful!')</script>".mysqli_error($conn);
    include "indexe.php";

}
}


?>