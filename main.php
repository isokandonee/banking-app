<?php
$f = $_POST['fname'];
$ph = $_POST['phone'];
$pa = $_POST['pass'];
$conn = mysqli_connect('localhost','root','','mitchel');
$insert = mysqli_query($conn,"INSERT into my_users(name,phone,password) values('$f','$ph','$pa')");
// $insert = mysqli_query($conn,'INSERT' 'INTO' `my-users`(`id`, `name`, `phone`, `password`) VALUES ([value-1],[$f],[$ph],[$pa]));
if($insert){
    echo "Registration successful!";
}
else {
    echo "Registration not successful!".mysqli_error($conn);

}
$f = "";
$ph = "";
$pa = "";
?>