<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PMS - Patient Management System</title>
	<link href="images/favicon.ico" rel="apple-touch-icon" type="image/png" sizes="144x144">
	<link href="images/favicon.ico" rel="apple-touch-icon" type="image/png" sizes="114x114">
	<link href="images/favicon.ico" rel="apple-touch-icon" type="image/png" sizes="72x72">
	<link href="images/favicon.ico" rel="apple-touch-icon" type="image/png">
	<link href="images/favicon.ico" rel="icon" type="image/png">
	<link href="images/favicon.ico" rel="shortcut icon">

	<!-- Global stylesheets -->
	<link href="css/font-awesome.min.css"rel="stylesheet" type="text/css">
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body style="background:url(images/bg.jpg); background-size:cover; background-attachment:fixed;">

<div class="overlay">
	<div class="container">
		<div class="form">
			<div class="row">
				<div class="col-md-12">
					<h3>Patient Information</h3>
					<hr />
				</div>
			</div>
			<form action="" >
				<div class="row">
					<div class="col-md-5">
						<div class="form-group">
							<div class="row">
								<div class="col-md-3">
									<label for="">Title</label>
								</div>
								<div class="col-md-9">
									<select name="" id="" class="form-control">
										<option value="mr">Mr</option>
										<option value="mrs">Mrs</option>
									</select>
								</div>
							</div>						
						</div>
						<div class="form-group">											
							<div class="row">
								<div class="col-md-3">
									<label for="">First Name</label>
								</div>
								<div class="col-md-9">
									<input type="text" name="" id="" class="form-control"/>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-3">
									<label for="">Sur Name</label>
								</div>
								<div class="col-md-9">
									<input type="text" name="" id="" class="form-control"/>
								</div>												
							</div>												
						</div>
						<div class="form-group">						
							<div class="row">
								<div class="col-md-3">
									<label for="">Address</label>
								</div>
								<div class="col-md-9">
									<input type="text" name="" id="" class="form-control"/>
								</div>												
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-3">
									<label for="">picture</label>
								</div>
								<div class="col-md-9">
									<input type="file" name="" id="" class="form-control"/>
									<img src="images/placeholder.png" width="100px" height="100px" alt="picture" class="img-responsive img-thumbnail" />
								</div>												
							</div>
						</div>
					</div>
					<div class="col-md-5">
						<div class="form-group">
							<div class="row">
								<div class="col-md-3">
									<label for="">Date</label>
								</div>
								<div class="col-md-9">
									<input type="date" name="" id="" class="form-control"/>
								</div>												
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-3">
									<label for="">Status</label>
								</div>
								<div class="col-md-9">
									<input type="text" name="" id="" class="form-control"/>
								</div>												
							</div>
						</div>
						<div class="form-group">											
							<div class="row">
								<div class="col-md-3">
									<label for="">Location</label>
								</div>
								<div class="col-md-9">
									<input type="text" name="" id="" class="form-control"/>
								</div>												
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-3">
									<label for="">Phone</label>
								</div>
								<div class="col-md-9">
									<input type="text" name="" id="" class="form-control"/>
								</div>												
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-3">
									<label for="">Email</label>
								</div>
								<div class="col-md-9">
									<input type="email" name="" id="" class="form-control"/>
								</div>												
							</div>
						</div>
						<div class="form-group">
							<div class="row">
								<div class="col-md-3">
									<label for="">Last Appoinment</label>
								</div>
								<div class="col-md-9">
									<input type="text" name="" id="" class="form-control"/>
								</div>												
							</div>
						</div>
					</div>
					<div class="col-md-2">
						<button type="button" class="btn btn-success btn-block"><i class="fa fa-refresh" aria-hidden="true"></i> Update</button>
						<button type="button" class="btn btn-danger btn-block"><i class="fa fa-close" aria-hidden="true"></i> Delete</button>
						<hr />
						<button type="button" class="btn btn-info btn-block"><i class="fa fa-print" aria-hidden="true"></i> Print</button>
						<button type="button" class="btn btn-primary btn-block"><i class="fa fa-plus" aria-hidden="true"></i> Create Patient</button>
					</div>
				</div>
				<hr />
				<div class="row">
					<div class="col-md-8">
<div>
	<!-- Nav tabs -->
	<ul class="nav nav-tabs" role="tablist">
		<li role="presentation" class="active"><a href="#details" aria-controls="details" role="tab" data-toggle="tab">Further Details</a></li>
		<li role="presentation"><a href="#contact" aria-controls="contact" role="tab" data-toggle="tab">Contact</a></li>
		<li role="presentation"><a href="#information" aria-controls="information" role="tab" data-toggle="tab">Information</a></li>
		<li role="presentation"><a href="#case-story" aria-controls="case-story" role="tab" data-toggle="tab">Case Story</a></li>
		<li role="presentation"><a href="#appoinment" aria-controls="appoinment" role="tab" data-toggle="tab">Appoinment</a></li>
		<li role="presentation"><a href="#treatment" aria-controls="treatment" role="tab" data-toggle="tab">Treatment</a></li>
	</ul>

	<!-- Tab panes -->
	<div class="tab-content">
		<div role="tabpanel" class="tab-pane fade in active" id="details"> 
			<br />
			<div class="form-group">											
				<div class="row">
					<div class="col-md-3">
						<label for="">Date of birth</label>
					</div>
					<div class="col-md-9">
						<input type="text" name="" id="" class="form-control"/>
					</div>
				</div>
			</div>
			<div class="form-group">											
				<div class="row">
					<div class="col-md-3">
						<label for="">Date of birth</label>
					</div>
					<div class="col-md-9">
						<input type="text" name="" id="" class="form-control"/>
					</div>
				</div>
			</div>
			<div class="form-group">											
				<div class="row">
					<div class="col-md-3">
						<label for="">Date of birth</label>
					</div>
					<div class="col-md-9">
						<input type="text" name="" id="" class="form-control"/>
					</div>
				</div>
			</div>
			<div class="form-group">											
				<div class="row">
					<div class="col-md-3">
						<label for="">Height</label>
					</div>
					<div class="col-md-9">
						<input type="text" name="" id="" class="form-control"/>
					</div>
				</div>
			</div>
			<div class="form-group">											
				<div class="row">
					<div class="col-md-3">
						<label for="">Weight</label>
					</div>
					<div class="col-md-9">
						<input type="text" name="" id="" class="form-control"/>
					</div>
				</div>
			</div>
		</div>
		<div role="tabpanel" class="tab-pane fade" id="contact">This is contact section</div>
		<div role="tabpanel" class="tab-pane fade" id="information">information section</div>
		<div role="tabpanel" class="tab-pane fade" id="case-story">case-story section</div>
		<div role="tabpanel" class="tab-pane fade" id="appoinment">case-story section</div>
		<div role="tabpanel" class="tab-pane fade" id="treatment">treatment section</div>
		</div>
</div>

					</div>
					<div class="col-md-4"></div>
				</div>
			</form>
		</div>
	</div>
</div>











    <!-- Core JS files -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/eis.js"></script>
</body>
</html>