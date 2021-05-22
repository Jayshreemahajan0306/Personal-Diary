<?php
include("db_connection.php");
session_start();
if($_SESSION['email']==true)
{
	include("header.php");
	$ee=$_SESSION['email'];
  $email=mysql_query("select * from reg where Email='$ee'");
  $email_fetch=mysql_fetch_array($email);
?>
<body style="background-image:url('image/welcome.jpeg')">
<div class="container-fluid">
 <div class="row">
  <div class="col-lg-12">
     <div class="col-lg-3"></div>
     <div class="col-lg-5" style="background-color:white;border-radius:13px;box-shadow:10px 10px 10px 10px #c4b4b4;">
	 <h1 class="text-center" style="margin-top:20px;font-size:30px;color:#552e6b;">
	 <i>Welcome <?php echo $email_fetch['Name'];?></i></h1><br>
	 <div class="text-center">
	  <?php
	 if($email_fetch['Image']=='')
	 {
		 ?>
		 
		 <img style="height:77px;width:77px;border-radius:120px;"src="image/add_fr.png">
<?php
	 }
	 else
	 {
	 ?>
	 <img style="height:77px;width:77px;border-radius:120px;"src="<?php echo 'image/'.$email_fetch['Image'];?>">
<?php
	 }
?>
	 </div>
	 <a style="float:Right;"href="Update_profile_pic.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-pencil"></span>Update Profile Pic
        </a>
	 <p style="margin-top:40px;margin-left:60px;">
	 
	 <span style="font-size:20px;color:#827575;"class="glyphicon glyphicon-user"></span>
	
	<span style="font-size:20px;margin-left:20px;"> <?php echo $email_fetch['Name'];?> <?php echo $email_fetch['Lname'];?>
	</span><br><br>
	<span style="font-size:20px;color:#827575;"class="glyphicon glyphicon-envelope"></span>
	<span style="font-size:20px;margin-left:20px;"> <?php echo $email_fetch['Email'];?>
	</span>
	<br><br>
	<span style="font-size:20px;color:#827575;"class="glyphicon glyphicon-phone"></span>
	<span style="font-size:20px;margin-left:20px;"> <?php echo $email_fetch['Phone'];?>
	</span><br><br>
	<span style="font-size:20px;color:#827575;"><i class="fa fa-birthday-cake" aria-hidden="true"></i></span>
	<span style="font-size:20px;margin-left:20px;"><?php echo $email_fetch['Date_of_birth'];?>
	</span>
	<br><br>
	<span style="font-size:20px;color:#827575;"><i class="fa fa-female" aria-hidden="true"></i><i class="fa fa-male" aria-hidden="true"></i></span>
	<span style="font-size:20px;margin-left:20px;"><?php echo $email_fetch['Gender'];?>
	</span><br><br>
	<a style="float:Right;"href="update_info.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-pencil"></span>Update Info
        </a><br><br>
	</p>
	
	 </div>
  </div>
 </div>
</div>

</body>

<?php
include("footer.php");
}
else
{
	echo "You are not logged in";
}
?>