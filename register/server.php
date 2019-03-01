<?php
// connect to database
     $db = mysqli_connect('localhost','root','','registeration');
// if register button is clicked
if (isset($_POST['register'])) {
    # code...
    $username =$_POST['username'];
    $email =$_POST['email'];
    $password_1 =$_POST['password_1'];
    $password_2 =$_POST['password_2'];
    $errors = [];

    // ensure that form fields are filled properly
    if (empty($username)) {
        # code...
        array_push($errors, "Username is required");
    }
    if (empty($email)) {
        # code...
        array_push($errors, "Email is required");
    }
    if (empty($password_1)) {
        # code...
        array_push($errors, "Password is required");
    }
    if ($password_1 != $password_2) {
        # code...
        array_push($errors, "The two passwords do not match");
    }
    if (count($errors) == 0){
        // encryption of password before storing in database
        $password = md5($password_1);
        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')"; 
        mysqli_query($db, $sql);
    }
}
?>