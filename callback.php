<?php
    require "init.php";

    fetchData();

    if(!isset($_SESSION['user'])){
        header("location:index.php");
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Signed In</title>
</head>
<body tyle="background-image: url('images/profile.jpg'); color: white; background-size: cover; ">
    <div>
		<div class="container">
        <div class="row" align="center" style="padding-top: 100px;">
        <div class="col-12">  
			<?php var_dump($_SESSION['payload']) ?><br>
        <a class="btn btn-success" href="logout.php">Log Out </a>      
        </div>
        </div>
      </div>
        
    </div>    
</body>
</html> 