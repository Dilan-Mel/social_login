<?php
	require "init.php";

	if(isset($_SESSION['user'])){
		header("location:callback.php");
	}
	?>

<!DOCTYPE <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sign with GitHub</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="main.css" />
	<script src="main.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-image: url('images/1.jpg'); color: white; background-size: cover; ">
	
	<div class="container">
        <div class="row" align="center" style="padding-top: 100px;">
        <div class="col-12">  
			<a class="btn btn-success"href="login.php">Sign with GitHub</a>      
        </div>
        </div>
      </div>
	
	
</body>
</html>


