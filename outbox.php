<?php
include("db_connection.php");
session_start();
if($_SESSION['email']==true)
{
	include("header.php");
	$ee=$_SESSION['email'];
	$query=mysql_query("select * from chat where Sender='$ee'");
	$query_num=mysql_num_rows($query);
	
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
	 <i>Your Outbox</i></h1><br>
	<form method="post">
	<table class="table" style="font-size:15px;">
  <thead>
    <tr>
      
      <th scope="col">Send To</th>
      <th scope="col">Message</th>
      
    </tr>
  </thead>
  <tbody>
    <?php
	for($i=1;$i<=$query_num;$i++)
	{
		$query_fetch=mysql_fetch_array($query);
		$e1=$query_fetch['Receiver'];
		$reg_query=mysql_query("select * from reg where Email='$e1'");
		$reg_fetch=mysql_fetch_array($reg_query);
		
	?>
	<tr>
	<td><?php echo $reg_fetch['Name'];?>&nbsp;&nbsp;<?php echo $reg_fetch['Lname'];?></td>
	<td><?php echo $query_fetch['Message'];?></td>
	</tr>
	<?php
	}
	?>
    
  </tbody>
</table>
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
<br>
<br>
<br>
<br>
<br>
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