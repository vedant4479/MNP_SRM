<?php

session_start();
	if(!isset($_SESSION['username']))
	{
		header("location:login.php");
	}
	elseif($_SESSION['User']=="admin")
	{
		header("location:login.php");
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
	<nav>
		<label class="logo">Easy Results</label>
		<ul>
			<li><a href="http://127.0.0.1/StudentResultManagement/logout.php" class="btn btn-success">Logout</a></li>
			<li><a href="" class="btn btn-success">Contact</a></li>
		</ul>
	</nav>
</body>
</html>