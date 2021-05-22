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
    echo 'alert("Enter Correct Email Or Password"); location.href="index.php"';
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

</form>
	  </div>
    </div>
  </div>
</div> </li>
     </ul>
    
        </div>
         </nav>
<!--corousal-div-->
   <div id="myCarousel" class="carousel slide"style="margin-top:-20px;" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel"style="margin-top:-150px;" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel"style="margin-top:-150px;" data-slide-to="1"></li>
      <li data-target="#myCarousel"style="margin-top:-150px;" data-slide-to="2"></li>
	  <li data-target="#myCarousel"style="margin-top:-150px;" data-slide-to="3"></li>
      <li data-target="#myCarousel"style="margin-top:-150px;" data-slide-to="4"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="image/diary.jpg" alt="Los Angeles" style="   -webkit-clip-path: polygon(0 0, 1600px 0, 1600px 87%, 0 100%);
  clip-path: polygon(0 0, 1600px 0, 1600px 70%, 0 100%);
width:100%;height:650px;">      
	  <div>
<div  class="carousel-caption"><h1 style="margin-top:-300px;font-size:50px;">
MAKE YOUR OWN PERSONAL DIARY</h1>
<p><h1 style="font-size:40px;"><small>The care you need. The compassion you deserve.</small></h1></p>
</div>
</div>
	</div>
	

      <div class="item">
        <img src="image/diary1.jpg" alt="Chicago" style="   -webkit-clip-path: polygon(0 0, 1600px 0, 1600px 87%, 0 100%);
  clip-path: polygon(0 0, 1600px 0, 1600px 70%, 0 100%);width:100%;height:650px;">
      <div>
<div  class="carousel-caption"><h1 style="margin-top:-300px;font-size:50px;">
ONE OF THE BEST PERSONAL DIARY WEBSITE</h1>
<p><h1 style="font-size:40px;"><small>Uncompromising Excellence. Commitment to Care.</small></h1></p>
</div>
</div>
	  </div>
      <div class="item">
        <img src="image/diary2.jpg" alt="New york"style="   -webkit-clip-path: polygon(0 0, 1600px 0, 1600px 87%, 0 100%);
  clip-path: polygon(0 0, 1600px 0, 1600px 70%, 0 100%);width:100%;height:650px;">
      <div>
<div  class="carousel-caption">
<h1 style="margin-top:-300px;font-size:50px;">
PROVIDE FACILITY TO ADD OUR DETAILS</h1>
<p><h1 style="font-size:40px;"><small>Add Personal Details</small></h1></p>
</div>
</div>
	  </div>
	  <div class="item">
        <img src="image/diary3.jpg" alt="New york"style="   -webkit-clip-path: polygon(0 0, 1600px 0, 1600px 87%, 0 100%);
  clip-path: polygon(0 0, 1600px 0, 1600px 70%, 0 100%);width:100%;height:650px;">
      <div>
<div  class="carousel-caption">
<h1 style="margin-top:-300px;font-size:50px;">
PROVIDE CHATTING WITH FRIENDS</h1>
<p><h1 style="font-size:40px;"><small>Add friends.Chat with friends</small></h1></p>
</div>
</div>
	  </div>
	  <div class="item">
        <img src="image/diary4.jpg" alt="New york"style="   -webkit-clip-path: polygon(0 0, 1600px 0, 1600px 87%, 0 100%);
  clip-path: polygon(0 0, 1600px 0, 1600px 70%, 0 100%);width:100%;height:650px;">
      <div>
<div  class="carousel-caption">
<h1 style="margin-top:-300px;font-size:50px;">
PROVIDE FACILITY TO ADD EXPENSES</h1>
<p><h1 style="font-size:40px;"><small>Add Expenses.</small></h1></p>
</div>
</div>
	  </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <div class="container-fluid" style="margin-top:160px;">
    <div class="row">
	  <div class="col-lg-12">
	    <div class="col-lg-6">
		  <img style="margin-left:55px;border-radius:600px;height:300px;width:300px;box-shadow:5px 15px 20px 15px;border:3px dotted #e8b95f;"src="image/diary5.jpg">
		</div>
		<div class="col-lg-6">
		<p>
		  <h2 style="margin-top:40px;text-align:justify;color:#3f2813;">
		    People used not only used to write diary to collect their memories but some also used to write diaries to remember the coming life events or some important information to remember like submission of project,appointment with doctor,etc. where in our busy schedule it is very difficult to remember.
		  </h2></p>
		  <p>
		  <h2 style="text-align:justify;color:#3f2813;">
		 For that that had made our website "Personal Diary" where you can log in store
your information safely and it will remain with you and you can go through it when you need it.  </h2></p>
		</div>
	  </div>
	</div>
  <div>
  
  <div class="container-fluid" style="margin-top:80px;width:100%;padding:0;">
    <div class="row">
	  <div class="col-lg-12" style="background-color:#a89c97;padding:20px;">
	    <div class="col-lg-3">
		  <img style="margin-left:50px;box-shadow:10px 10px 15px 15px;height:220px;width:220px;border-radius:120px;"src="image/diary_content.jpg">
		</div>
		<div class="col-lg-3"style="padding:7px;">
		  <img style="margin-left:50px;box-shadow:10px 10px 15px 15px;height:220px;width:220px;border-radius:120px;"src="image/diary_add_friends.jpg">
		</div>
		<div class="col-lg-3"style="padding:7px;">
		  <img style="margin-left:50px;box-shadow:10px 10px 15px 15px;height:220px;width:220px;border-radius:120px;"src="image/diary_expenses.jpg">
		</div>
		<div class="col-lg-3"style="padding:7px;">
		  <img style="margin-left:50px;box-shadow:10px 10px 15px 15px;height:220px;width:220px;border-radius:120px;"src="image/video_call.jpg">
		</div>
	 </div>
    </div>
  </div></div></div>
  <div class="container-fluid">
 
    <div class="col-lg-12">
	<br>
	  <p><h1 class="text-center"><small style="font-size:35px;">Our Personal Diary</small></h1></p>
      <p><h1 class="text-center"><small style="font-size:20px;">On Our Online Personal Diary You can add your details,achievements and the things which you wish you to happen or which was already happened.
	  You can add your daily expenses and make budget.You can add friends and can chat with that friends.
	  </small></h1></p>
	</div>
  </div>
  <br>
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