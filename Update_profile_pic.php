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
		$file=$_FILES["file"]["name"];
	    $tmp_name=$_FILES["file"]["tmp_name"];
	    $path="image/".$file;
	    move_uploaded_file($tmp_name,$path);
		$update=mysql_query("update reg SET Image='$file' where Email='$ee'");	
		if($update)
		{
			echo '<script language="javascript">';
    echo 'alert("Successfully Updated"); location.href="Update_profile_pic.php"';
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
	 <i>Update Your Profile Pic</i></h1><br>
	 <form method="post" enctype="multipart/form-data">
	 <div class="text-center">
	 <?php
	 if($email_f['Image']=='')
	 {
		 ?>
		 
		 <img style="height:250px;width:250px;border-radius:120px;"src="image/add_fr.png">
<?php
	 }
	 else
	 {
	 ?>
	 <img style="height:250px;width:250px;border-radius:120px;"src="<?php echo 'image/'.$email_f['Image'];?>">
<?php
	}
?>
	 <input style="padding:10px;width:200px;margin-left:177px;font-size:15px;margin-top:30px;" type="file" name="file">
	<br>
	
<input type="submit" value="Submit"style="margin-left:40px;background-color:#5a6268;border-radius:3px;border:1px solid #5a6268;color:white;padding:5px;font-size:16px;" name="update">
	<br>
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