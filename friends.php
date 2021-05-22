<?php
include("db_connection.php");
if(isset($_POST['inbox']))
{
	header('location:inbox.php');
}
if(isset($_POST['outbox']))
{
	header('location:outbox.php');
}
session_start();
if($_SESSION['email']==true)
{
	include("header.php");
	$ee=$_SESSION['email'];
	$query=mysql_query("select * from reg");
	$query_count=mysql_num_rows($query);
	
	
?>
<body style="background-image:url('image/friends.jpg');overflow-y: scroll;
overflow-x: hidden;">
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
	   <div class="col-lg-3"></div>
	   <form method="post">
	  <div class="col-lg-5" style="background-color:white;border-radius:13px;box-shadow:10px 10px 10px 10px #c4b4b4;">
	   <h1 class="text-center" style="margin-top:20px;font-size:30px;color:#552e6b;">
	 <i>View Friends</i></h1><br>
	<form method="post">
	<?php
	for($i=1;$i<=$query_count;$i++)
	{
		$query_fetch=mysql_fetch_array($query);
		$email=$query_fetch['Email'];
		if($email==$ee)
		{
		}
		else
		{
		?>
		<div class="text-center">
		<?php
	 if($query_fetch['Image']=='')
	 {
		 ?>
		 
		 <img style="height:77px;width:77px;border-radius:120px;"src="image/add_fr.png">
<?php
	 }
	 else
	 {
	 ?>
<img style="height:80px;width:80px;border-radius:120px;"src="<?php echo 'image/'.$query_fetch['Image']?>">
		<?php
	 }
?>
		<span style="font-size:20px;color:#827a7a;">
		&nbsp;&nbsp;
		<?php echo $query_fetch['Name'];?>&nbsp;&nbsp;
		<?php echo $query_fetch['Lname'];?>&nbsp;&nbsp;
		<a href="chat_friends.php?chat=<?php echo $query_fetch['Id'];?>" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-pencil"></span>Chat
        </a>
		</span>
		</div>
		<br><hr>
		<?php
	}}
	?>
	<div class="text-center">
	<input type="submit" value="Inbox"
style="margin-top:10px;background-color:#4c76b5;
border-radius:3px;border:1px solid #4c76b5;color:white;padding:2px;font-size:16px;"
 name="inbox">
 <input type="submit" value="Outbox"
style="margin-top:10px;margin-left:40px;background-color:#af7575;
border-radius:3px;border:1px solid #af7575;color:white;padding:2px;font-size:16px;"
 name="outbox">
	</div>
	<br>
	<br>
	<div>
	</div>
 
 </div>
 <br>
 </form>
    </div>
	</div>
	</div>
  </div>
</div>
<br>
<br>
<br>
</body>
<?php
include("footer.php");
}
else
{
	
	echo "You are not logged In";
}
?>