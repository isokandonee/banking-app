<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>
	<link rel="stylesheet" type="text/css" href="res/bootstrap.min.css">
	<script type="" src="res/bootstrap.min.js"></script>
	<script type="" src="res/jquery.min.js"></script>
	<style>
		body{
			background-color: lightgrey;
			/* color: white; */
			background: url(img/new6.jpg) no-repeat right top;
		}
		form{
			/* background-color: olivedrab; */
			position: relative;
			top: 100px;
			border-radius: 5px;
			/* opacity: 0.8 !important; */
			color: white;
		}
		
		.container{
            /* background-color: aquamarine !important; */
            /* opacity: 0.9; */
            position: relative;
            padding: 20px;
            border-radius: 5px;
        }
	</style>
</head>
<body>
	<div class="container">
			<form class="col-md-6 mx-auto shadow pt-4 pd-4" action="signup.php" method="POST" enctype="multipart/form-data">
				<h2>User Registration</h2>
					<div class="form-group">
						<label for="pwd">Full Name:</label>
						<input required type="text" name="fname" class="form-control" id="pwd" name="password">
					</div>
				<div class="form-group">
					<label for="usr">Username:</label>
					<input required type="text" name="uname" class="form-control" id="usr" name="username">
				</div>
				<div class="form-group">
					<label for="pwd">Email:</label>
					<input required type="email" name="email" class="form-control" id="pwd" name="password">
				</div>
				<div class="form-group">
					<label for="pwd">Telephone:</label>
					<input required type="text" name="phone" class="form-control" id="pwd" name="password">
				</div>
				<div class="form-group">
					<label for="pwd">Password:</label>
					<input required type="password" name="pass" class="form-control" id="pwd" name="password">
				</div>
				<div class="form-group">
					<label for="pwd">Confirm Password:</label>
					<input required type="password" name="valpass" class="form-control" id="pwd" name="password">
				</div>
				<!-- <div class="form-group">
					<label for="pht">Upload Photo:</label>
					<input required type="file" name="photo" class="form-control" id="pht" name="photo">
				</div> -->
					<button type="submit" class="btn btn-primary">Sign up</button>
					<p>Signed up already? <a href="loginh.php">Log in</a></p>
			</form>
	</div>
</body>
</html>