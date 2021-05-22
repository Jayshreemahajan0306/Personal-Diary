<?php
include("db_connection.php");

session_start();
if($_SESSION['email']==true)
{
	include("header.php");
	$ee=$_SESSION['email'];
	$email=mysql_query("select * from reg where Email='$ee'");
	$email_f=mysql_fetch_array($email);
	if(isset($_POST['update']))
	{
        $name=$_POST['name'];		
        $lname=$_POST['lname'];		
        $email=$_POST['email'];		
        $phone=$_POST['phone'];		
        $password=$_POST['password'];		
        $date=$_POST['date'];		
        $gen=$_POST['gen'];
        $update=mysql_query("update reg SET Name='$name',Lname='$lname',Email='$email',
		Phone='$phone',Password='$password',Date_of_birth='$date',Gender='$gen'
		where Email='$ee'");		
		if($update)
		{
			echo '<script language="javascript">';
    echo 'alert("Successfully Updated"); location.href="update_info.php"';
    echo '</script>';
		}
	}
?>

<body style="background-image:url('image/update_pic.jpeg')">
<div class="container-fluid">
 <div class="row">
  <div class="col-lg-12">
     <div class="col-lg-3"></div>
     <div class="col-lg-5" style="background-color:white;border-radius:13px;box-shadow:10px 10px 10px 10px #c4b4b4;">
	 <h1 class="text-center" style="margin-top:20px;font-size:30px;color:#552e6b;">
	 <i>Update Your Profile Info</i></h1><br>
	 <form method="post" enctype="multipart/form-data">
	 <div class="text-center">
	
<span style="color:#756f6f;font-size:20px;margin-left:50px;">First Name</span> 
	  <input type="text"value="<?php echo $email_f['Name'];?>" style="border:none;padding:10px;width:200px;border-bottom:1px solid black;margin-left:40px;font-size:15px;" name="name">
	 
	<br>
	 <span style="margin-top:30px;color:#756f6f;font-size:20px;margin-left:50px;">Last Name</span> 
	  <input type="text"value="<?php echo $email_f['Lname'];?>" style="border:none;padding:10px;width:200px;border-bottom:1px solid black;margin-left:40px;font-size:15px;" name="lname">
	 <br>

	 <span style="margin-top:30px;color:#756f6f;font-size:20px;margin-left:50px;">Email</span> 
	  <input type="text"value="<?php echo $email_f['Email'];?>" style="border:none;padding:10px;width:200px;border-bottom:1px solid black;margin-left:82px;font-size:15px;" name="email">
		  <br>
	 <span style="margin-top:30px;color:#756f6f;font-size:20px;margin-left:50px;">Phone</span> 
	  <input type="text"value="<?php echo $email_f['Phone'];?>" style="border:none;padding:10px;width:200px;border-bottom:1px solid black;margin-left:75px;font-size:15px;" name="phone">
	  <br>
	 <span style="margin-top:30px;color:#756f6f;font-size:20px;margin-left:50px;">Password</span> 
	  <input value="<?php echo $email_f['Password'];?>"type="text" style="border:none;padding:10px;width:200px;border-bottom:1px solid black;margin-left:47px;font-size:15px;" name="password">
	 <br>
	 <span style="margin-top:30px;color:#756f6f;font-size:20px;margin-left:50px;">Date Of Birth</span> 
	  <input type="date" value="<?php echo $email_f['Date_of_birth'];?>"style="border:none;padding:10px;width:200px;border-bottom:1px solid black;margin-left:17px;font-size:15px;" name="date">
	 <br>
	 <span style="margin-top:30px;color:#756f6f;font-size:20px;margin-left:0px;">Gender</span> 
	  <input type="radio" style="margin-left:60px;" name="gen"value="Male"
	  <?php
	  if($email_f['Gender']=='Male')
	  {
		  echo "checked";
	  }
	 ?>
	  ><span style="font-size:19px;">Male</span>
	  <input type="radio" style="margin-left:20px;" name="gen"value="Female"
	  <?php
	  if($email_f['Gender']=='Female')
	  {
		  echo "checked";
	  }
	 ?>
	  ><span style="font-size:19px;">Female</span>
	<br>
	<br>
<input type="submit" value="Submit"style="margin-left:40px;background-color:#5a6268;border-radius:3px;border:1px solid #5a6268;color:white;padding:5px;font-size:16px;" name="update">
	<br>
	<br>
	
	
	</div>
	 </form>
	 
	
	 </div>
  </div>
 </div>
</div>
<br><br>
</body>
<?php
include("footer.php");
}
else
{
	echo "you are not logged in";
}
?>