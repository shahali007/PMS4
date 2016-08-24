<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
	<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>


<!--===== start login form =====-->
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">
			<div class="ltp-login">
				<h2 class="ltp-logo">LTP</h2>
				<h4>Sign in</h4>
				<form action="" method="post">
					<div class="form-group">
					    <label for="login-username">Name, Email or Phone Number</label>
					    <input type="text" class="form-control" id="login-username" required>
				  	</div>
				  	<div class="form-group">
					    <label for="login-password">Password</label>
					    <input type="text" class="form-control" id="login-password" required>
				  	</div>
				  	<div class="checkbox">
					    <label>
					      	<input type="checkbox"> Keep me signed in
				    	</label>
						<a href="#" class="link">&nbsp;&nbsp; Forgot password?</a>
				  	</div>
				  	<button type="submit" class="btn btn-primary">Sign in</button>
				</form>
				<a href="#" class="link">Create new account.</a>
			</div>
		</div>
	</div>
	<footer class="row">
		<div class="col-md-12 text-center">
			<p>Powered by <a href="#" >Eunoia I.T. Solutions</a>.2016 </p>
		</div>
	</footer>
</div>
<!--===== end login form =====-->


    <!--===== javascripts =====-->
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>