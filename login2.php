<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login Form</title>

      <link rel="stylesheet" href="css/reset.css">
      <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
      <link rel='stylesheet prefetch' href='css/font-awesome.min.css'>

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/login.css">
    
  </head>
<body>
<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Login</h1>
    <form>
      <div class="input-container">
        <input type="text" id="Username" required="required"/>
        <label for="Username">Username</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="Password" required="required"/>
        <label for="Password">Password</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button><span>Go</span></button>
      </div>
      <div class="footer"><a href="#">Forgot your password?</a><a href="#">Create new account.</a></div>
    </form>
  </div>
  <footer class="row">
		<div class="col-md-12 text-center">
			<p>Powered by <a href="#">Eunoia I.T. Solutions</a>.2016 </p>
		</div>
	</footer>
</div>

	<script src='js/jquery-2.1.4.min.js'></script>
    <script src="js/index.js"></script>
  </body>
</html>
