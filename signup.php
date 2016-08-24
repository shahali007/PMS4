<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign up</title>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,900,500' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background: url('images/signup-bg.jpg');background-size: cover;background-attachment: fixed;">


<!--===== start login form =====-->
<div class="overlay">
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<form action="" method="post">
				<div class="form">
                    <h2>Patient's requirements</h2>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Date</label>
                            <input type="date" class="form-control" name="" autofocus required/>
                        </div>
                        <div class="col-md-6">
                            <label>Age</label>
                            <input type="text" class="form-control" name="" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Name</label>
                            <input type="text" class="form-control" name="" />
                        </div>
                        <div class="col-md-6">
                            <label>Phone Number</label>
                            <input type="text" class="form-control" name="" />
                        </div>
                    </div>
                    <label>Gender : </label><br>
                    <label class="radio-inline">
                        <input type="radio" name="gender" value="M" id=male />Male
                    </label><br>
                    <label class="radio-inline">
                        <input type="radio" name="gender" value="F" id=female />Female
                    </label><br><br>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Problem</label>
                            <textarea name="" id="" cols="30" rows="3" class="form-control"></textarea>
                        </div>
                        <div class="col-md-6">
                            <label>CC (Chief Complain)</label>
                            <textarea name="" id="" cols="30" rows="3" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>ON Examination (Diagnosis)</label>
                            <textarea name="" id="" cols="30" rows="3" class="form-control"></textarea>
                        </div>
                        <div class="col-md-6">
                            <label>Treatment</label>
                            <textarea name="" id="" cols="30" rows="3" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label>Address</label>
                            <input type="text" class="form-control" name="">
                        </div>
                        <div class="col-md-6">
                            <label>Email</label>
                            <input type="email" class="form-control" name="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Picture</label>
                            <input type="file" class="form-control">
                        </div>
                    </div>
                    <input type="submit" value="Submit" class="btn btn-lg btn-block eis-button-deeppink">
                </div>
			</form>
		</div>
	</div>
    <footer class="row">
        <div class="col-md-12 text-center">
            <p>Powered by <a href="#">Eunoia I.T. Solutions</a>.2016 </p>
        </div>
    </footer>
</div>
</div>
<!--===== end login form =====-->


    <!--===== javascripts =====-->
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>