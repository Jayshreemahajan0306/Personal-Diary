<?php
include("db_connection.php");
 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
   <link href="bootstrap-4.3.1-dist/css/bootstrap.css" rel="stylesheet" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    
   <title>Personal Diary</title>
	<style>
	#email:hover
	{
		color:#00FFFF;text-decoration:underline;
	}
	#meet:hover
	{
		background-color:#28a7e9;padding:2px;transition-delay:.1s;text-decoration:none;
		border-radius:2px;
	}
	li
	{
		font-size:15px;padding:10px;
	}
	</style>
  </head>
  <body>
   <div class="container-fluid">
    <div class="row">
	  <div class="col-lg-12"style="background-color:#303030;">
	      <div class="col-lg-12" style="padding:16px;">
		    <div class="col-lg-3"style="padding:3px;">
                        <i  style="color:#28a7e9;font-size:15px;"class="fa fa-phone"></i><span style="font-size:15px;color:white;">&nbsp;&nbsp;&nbsp;<b>Phone</b></span>&nbsp;&nbsp;&nbsp;<span style="color:white;font-size:14px;">010-020-0340</span>
			</div>
			<div class="col-lg-4"style="padding:3px;"><i  style="margin-left:-2px;color:#28a7e9;font-size:15px;"class="fa fa-envelope-o"></i><span style="font-size:15px;color:white;">&nbsp;&nbsp;&nbsp;<b>Email</b></span>&nbsp;&nbsp;&nbsp;<b style="color:#A9A5A5;"><a style="font-size:14px;cursor:pointer;" id="email">personaldiary@gmail.com</a></b>
			</div>
			<div class="col-lg-4" style="padding:3px;"><span style="margin-left:25px;font-size:15px;color:white;">
			<b>Meet us on</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a style="color:white;"id="meet"href="#" class="fa fa-facebook"></a>
			<a style="color:white;margin-left:20px;"id="meet"href="#" class="fa fa-twitter"></a>
			<a style="color:white;margin-left:20px;"id="meet"href="#" class="fa fa-instagram"></a>
			<a style="color:white;margin-left:20px;"id="meet"href="#" class="fa fa-apple"></a>
			</span>
			</div>			
          </div>
		</div>
	</div>
   </div>
   

	   <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><h1 style="color:#5e5e5e;padding:10px;margin-left:10px;">My Online Personal Diary</h1></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<div class="col-lg-5"></div>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php"><b>Home</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="diary.php"><b>Diary</b></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="expenses.php"><b>Expenses</b></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="friends.php"><b>Friends</b></a>
      </li>
	  <li class="nav-item">
     <a href="logout.php">
	 <button type="button" style="font-size:14px;height:30px;margin-top:10px;"class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
  Log Out
</button></a>
</li>
     </ul>
    
        </div>
         </nav>
  
<!--corousal-div-end-->
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>