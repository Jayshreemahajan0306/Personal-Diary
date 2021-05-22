<?php
include("db_connection.php");
 if(isset($_POST["sign"]))
 {
	 header("location:sign_in.php");
 }
  if(isset($_POST['login']))
 {
	 $email=$_POST['email'];
	 $pass=$_POST['pass'];
	 $query=mysql_query("select * from reg where Email='$email' && Password='$pass'");
	 $rowcount=mysql_num_rows($query);
	 if($rowcount==true)
	 {
		  session_start();
		 $_SESSION['email']=$email;
		 header('location:welcome.php');
	 }
	 else
	 {
		 echo '<script language="javascript">';
    echo 'alert("Enter Correct Email Or Password"); location.href="contact.php"';
    echo '</script>';
	 }
 }
if(isset($_POST['submit']))
{
	if($_POST['name']=='')
	{
		$a="Please Fill Name";
	}
	else
	{
		$name=$_POST['name'];
	}
	if($_POST['email']=='')
	{
		$c="please fill Email";
	}
	elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
	{
      $m="Invalid email format";
    }
	else
	{
		$email=$_POST['email'];
	}$ll=strlen($_POST['phone']);
	if($_POST['phone']=='')
	{
		$d="please fill Phone no.";
	}
	
	elseif($ll!=10)
	{
		$j="Enter 10 digits";
	}

	elseif(!is_numeric($_POST['phone']))
	{
		$k="Enter only Numbers";
	}
	else
	{
		$phone=$_POST['phone'];
	}
	if($_POST['message']=='')
	{
		$p="Please Fill Message";
	}
	else
	{
		$message=$_POST['message'];
	}
	if($name && $email && $phone && $message)
	{
		$insert=mysql_query("Insert into contact (Name,Email,Phone,Message)
		value('$name','$email','$phone','$message')");
		
		
	}
	if($insert)
	{
		echo '<script language="javascript">';
    echo 'alert("Successfully Inserted"); location.href="contact.php"';
    echo '</script>';
	}
}

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
  <body style="background-image:url(image/bg_contact.jpg);">
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
        <a class="nav-link" href="about.php"><b>About</b></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="contact.php"><b>Contact</b></a>
      </li>
	  <li class="nav-item">
        <button type="button" style="font-size:15px;height:30px;margin-top:10px;"class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Log In
</button>

<!-- Modal -->
<form method="post">
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 style="color:green;"class="modal-title" class="text-center" id="exampleModalLabel"><b>Log In</b></h2>
        <button type="button" style="font-size:25px;"class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <div><br>
        <span style="color:#4c4444;font-size:19px;margin-left:10px;"><b><i>Email</i></b></span>
		<input style="margin-left:70px;border:none;border-bottom:1px solid black;"type="text" name="email">
	     <br>
        <span style="color:#4c4444;font-size:19px;margin-left:10px;"><b><i>Password</i></b></span>
		<input style="margin-left:38px;border:none;border-bottom:1px solid black;"type="password" name="pass">
	 		<br><br> 
	  </div>
      </div>
      <div class="modal-footer"><br><br>
            <input type="submit" value="Log In"style="background-color:#218838;border-radius:3px;border:1px solid #218838;color:white;padding:3px;font-size:13px;" name="login">
  <input type="submit" value="Sign In"style="background-color:#0069d9;border-radius:3px;border:1px solid #0069d9;color:white;padding:3px;font-size:13px;" name="sign">
  </div>
    </div>
  </div>
</div>
      </li></form>
     </ul>
    
        </div>
         </nav>
<!--corousal-div-->
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
	 <div class="col-lg-3"></div>
	  <div class="col-lg-5" style="background-color:white;margin-top:50px;border-radius:20px;box-shadow:10px 10px 10px 10px #d6cbcb;border:3px #4a6fa5;">
	  <form method="post">
	  <h1 class="text-center"style="margin-top:30px;color:#513030;font-size:30px;"><i>Contact Us</i></h1>
	  <div style="margin-top:30px;padding:5px;">
	  <span style="margin-top:30px;color:#756f6f;font-size:20px;margin-left:50px;">Name</span> 
	  <input type="text" style="border:none;padding:10px;width:200px;border-bottom:1px solid black;margin-left:75px;font-size:15px;" name="name">
	  <span style="color:red;font-size:15px;">
	 <?php
	 if(isset($a))
	 {
		 echo $a;
	 }
	 ?>
	 </span>
	 <br>
	 <span style="margin-top:30px;color:#756f6f;font-size:20px;margin-left:50px;">Email</span> 
	  <input type="text" style="border:none;padding:10px;width:200px;border-bottom:1px solid black;margin-left:82px;font-size:15px;" name="email">
<span style="color:red;font-size:15px;">
	 <?php
	 if(isset($c))
	 {
		 echo $c;
	 }
	 ?>
	 </span>
	 <span style="color:red;font-size:15px;margin-left:-27px;">
	 <?php
	 if(isset($m))
	 {
		 echo $m;
	 }
	 ?>
	 </span>	
	<br>
	 <span style="margin-top:30px;color:#756f6f;font-size:20px;margin-left:50px;">Phone</span> 
	  <input type="text" style="border:none;padding:10px;width:200px;border-bottom:1px solid black;margin-left:75px;font-size:15px;" name="phone">
	 <span style="color:red;font-size:15px;margin-left:-27px;">
	 <?php
	 if(isset($d))
	 {
		 echo $d;
	 }
	 ?>
	 </span>
	 <span style="color:red;font-size:15px;margin-left:30px;">
	 <?php
	 if(isset($j))
	 {
		 echo $j;
	 }
	 ?>
	 </span>
	 <span style="color:red;font-size:15px;margin-left:-27px;">
	 <?php
	 if(isset($k))
	 {
		 echo $k;
	 }
	 ?>
	 </span>
	 <br>
	 <span style="margin-top:30px;color:#756f6f;font-size:20px;margin-left:50px;">Message</span> 
	  <input type="text" style="border:none;padding:10px;width:200px;border-bottom:1px solid black;margin-left:54px;font-size:15px;" name="message">
<span style="color:red;font-size:15px;margin-left:-27px;">
	 <?php
	 if(isset($p))
	 {
		 echo $p;
	 }
	 ?>
	 </span>	
	<br>
<input type="submit" value="Submit"style="margin-top:35px;margin-left:210px;background-color:#5a6268;border-radius:3px;border:1px solid #5a6268;color:white;padding:5px;font-size:16px;" name="submit">
	 <br><br>
	 </form>
	 </div>
	  
	  </div>
	</div>
  </div>
</div>

  <br><br><br>
  <?php
  include("footer.php");
  ?>
<!--corousal-div-end-->
  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>