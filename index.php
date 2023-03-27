<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Result Management System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
	<nav>
		<label class="logo">Easy Results</label>
		<ul>
			<li><a href="" class="btn btn-success">Home</a></li>
			<li><a href="http://127.0.0.1/StudentResultManagement/login.php" class="btn btn-success">Login</a></li>
			<li><a href="" class="btn btn-success">Contact</a></li>
		</ul>
	</nav>

	<div class="section1">
		<label class="img_text">Get Easy Results For Better Analysis</label>
		<img class="main_image" src="result_management.jpeg">
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-4">	
				<img class="one_img" src="1.jpg">
			</div>
			<div class="col-md-8">
				<h1>Welcome to Easy Results</h1>
				<p>The main objective of this project is to provide results to the students in a simple way. The students can get results through the our  secure website through their unique ID and Password. By analysing the result status and applying the standard calculation followed by the University the result are displayed with individual scores and the equivalent percentage. The system is intended for the student. The student can login through their login id and password to check their respective results.
				</p>
			</div>
		</div>
	</div>

	<center>
		<div class="registration_form">
			<center class="title_deg">
				Registration Form
			</center>
		<form class="reg_form">
			<div class="adm_int">
				<label class="label_txt"> Full Name</label>
				<input class="input_des" type="text" name="FullName">
			</div>
			<div class="adm_int">
				<label class="label_txt">College Email</label>
				<input class="input_des" type="text" name="CollegeEmail">
			</div>
			<div class="adm_int">
				<label class="label_txt">TUF ID</label>
				<input class="input_des" type="text" name="TUFID">
			</div>
			<div class="adm_int">
				<label class="label_txt">Password</label>
				<input class="input_des" type="text" name="Password">
			</div>
			<div class="adm_int">
				<input class="btn btn-primary" id="submit" type="Submit" value="REGISTER">
			</div>
		</form>
	</div>
	</center>

	<footer>
		<h4 class="foot_txt">All @Copyright reserved by Easy Reults</h4>
	</footer>
</body>
</html>