<?php
include("db_connection.php");
session_start();
if($_SESSION['username']==true)
{
	include("header.php");
	$username11=$_SESSION['username'];
	$query=mysql_query("select * from admin where Username='$username11'");
	$query_fetch=mysql_fetch_array($query);
	if(isset($_POST['update']))
	{
		$username=$_POST['username'];
		echo $username;
		$password=$_POST['password'];
		echo $password;
		$update=mysql_query("update admin SET Username='$username',Password='$password'");
	 if($update)
		{
			echo '<script language="javascript">';
    echo 'alert("Successfully Updated"); location.href="index.php"';
    echo '</script>';
		}
	}
	?>
	<body style="background-image:url('image/diary11.jpg');overflow-y: scroll;
overflow-x: hidden;">
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12"><br>
	   <div class="col-lg-3"></div>
	  <div class="col-lg-5" style="background-color:white;border-radius:13px;box-shadow:10px 10px 10px 10px #c4b4b4;">
	   <h1 class="text-center" style="margin-top:20px;font-size:30px;color:#552e6b;">
	 <i>Update Your Profile</i></h1><br>
	<form method="post">
	 <div class="text-center">
	    <span style="color:#756f6f;font-size:20px;margin-left:50px;">Username</span> 
	    <input type="text"value="<?php echo $query_fetch['Username'];?>"
		style="border:none;padding:10px;width:200px;border-bottom:1px solid black;
		margin-left:40px;font-size:15px;" name="username">
	   <br>
	   <br>
	    <span style="color:#756f6f;font-size:20px;margin-left:50px;">Password</span> 
	    <input type="text"value="<?php echo $query_fetch['Password'];?>"
		style="border:none;padding:10px;width:200px;border-bottom:1px solid black;
		margin-left:40px;font-size:15px;" name="password">
	   <br>
	   <br>
<input type="submit" value="Update"
style="margin-top:10px;margin-left:40px;background-color:#4c76b5;
border-radius:3px;border:1px solid #4c76b5;color:white;padding:2px;font-size:16px;"
 name="update">
<br>
	 </div><br>
	</form>
	  </div>
    </div>
  </div>
</div><br><br><br><br><br>
</body>
	<?php
	include("footer.php");
}
else
	
{
	echo "You are not logged In";
}
?>