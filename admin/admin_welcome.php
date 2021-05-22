<?php
include("db_connection.php");
session_start();
if($_SESSION['username']==true)
{
include("header.php");
	$reg_query=mysql_query("select * from reg");
	$reg_num=mysql_num_rows($reg_query);
?>
	<body style="background-image:url('image/diary11.jpg');overflow-y: scroll;
overflow-x: hidden;">
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12"><br>
	   <div class="col-lg-1"></div>
	  <div class="col-lg-10" style="background-color:white;border-radius:13px;box-shadow:10px 10px 10px 10px #c4b4b4;">
	   <h1 class="text-center" style="margin-top:20px;font-size:30px;color:#552e6b;">
	 <i>View Signed In</i></h1><br>
	<form method="post">
	 <div>
	    <table class="table" style="font-size:15px;">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Date Of Birth</th>
      <th scope="col">Gender</th>
      <th scope="col">#</th>
      
    </tr>
  </thead>
  <tbody>
  <?php
for($i=1;$i<=$reg_num;$i++)
{
	$reg_fetch=mysql_fetch_array($reg_query);
?>
<tr>
<td><?php echo $reg_fetch['Name'];?>&nbsp;&nbsp;<?php echo $reg_fetch['Lname'];?>
<td><?php echo $reg_fetch['Email'];?></td>
<td><?php echo $reg_fetch['Phone'];?></td>
<td><?php echo $reg_fetch['Date_of_birth'];?></td>
<td><?php echo $reg_fetch['Gender'];?></td>
<td><a href="view_diary.php?diary=<?php echo $reg_fetch['Id'];?>">View Diary</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="view_expenses.php?expenses=<?php echo $reg_fetch['Id'];?>">View Expenses</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="view_inbox.php?inbox=<?php echo $reg_fetch['Id'];?>">View Inbox</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="view_outbox.php?outbox=<?php echo $reg_fetch['Id'];?>">View Outbox</a></td>
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