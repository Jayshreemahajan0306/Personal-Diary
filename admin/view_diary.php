<?php
include('db_connection.php');
session_start();
if($_SESSION['username']==true)
{
	include("header.php");
	$username=$_SESSION['username'];
	if(isset($_REQUEST['diary']))
	{
		$id=$_REQUEST['diary'];
		$reg_query=mysql_query("select * from reg where Id='$id'");
		$reg_fetch=mysql_fetch_array($reg_query);
		$Email=$reg_fetch['Email'];
		$diary_query=mysql_query("select * from add_diary where Email='$Email'");
		$query_num=mysql_num_rows($diary_query);
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
	 <i>View Diary Of <?php echo $reg_fetch['Name'];?></i></h1><br>
	<form method="post">
	 <div>
	    <table class="table" style="font-size:15px;">
  <thead>
    <tr>
      <th scope="col">Date</th>
      <th scope="col">Diary</th>
      
    </tr>
  </thead>
  <tbody>
  <?php
for($i=1;$i<=$query_num;$i++)
{
	$diary_fetch=mysql_fetch_array($diary_query);
?>
<tr>
<td><?php echo $diary_fetch['Date'];?></td>
<td><?php echo $diary_fetch['Diary'];?></td>
</tr>
<?php
}	
  ?>
  </tbody>
</table>
<br>
	 </div><br>
	</form>
	  </div>
    </div>
  </div>
</div><br><br><br><br><br><br><br><br><br><br>
</body>
<?php
include("footer.php");
}
else
{
	echo "You are not logged In";
}
?>