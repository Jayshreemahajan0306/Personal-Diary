<?php
include('db_connection.php');
session_start();
if($_SESSION['email'])
{
	include('header.php');
	$ee=$_SESSION['email'];
	if(isset($_REQUEST['del']))
{
	 $id=$_REQUEST['del'];
	 $del_query=mysql_query("select * from expenses where Id='$id'");
	 $del_fetch=mysql_fetch_array($del_query);
	 $delete=mysql_query("Delete from expenses where Id='$id'");
	 if($delete)
	 {
			echo '<script language="javascript">';
    echo 'alert("Successfully Deleted"); location.href="show_expenses.php"';
    echo '</script>';
		}
	 
}
	$show=mysql_query("select * from expenses where Email='$ee'");
	$rowcount=mysql_num_rows($show);
?>
<body style="background-image:url('image/expenses.jpg');overflow-y: scroll;
overflow-x: hidden;">
<div class="container-fluid">
  <div class="row">
    <div class="container-fluid">
	  <div class="col-lg-2"></div>
	  <div class="col-lg-7" style="height:450px;font-size:18px;background-color:white;border-radius:13px;box-shadow:10px 10px 10px 10px #c4b4b4;">
	 <h1 class="text-center" style="margin-top:20px;font-size:30px;color:#552e6b;">
	 <i>Your Diary</i></h1><br>
	<table class="table">
  <thead>
    <tr>
      
      <th scope="col">Date</th>
      <th scope="col">Grocery</th>
      <th scope="col">Vegeatables</th>
      <th scope="col">Daily</th>
      <th scope="col">Other</th>
      <th scope="col">Total</th>
      <th scope="col">#</th>
     
    </tr>
  </thead>
  <?php
  for($i=1;$i<=$rowcount;$i++)
  {
	
	  $show_fetch=mysql_fetch_array($show);
	  ?>
	  <tr>
	  <td><?php echo $show_fetch['Date'];?></td>
	  <td><?php echo $show_fetch['Grocery'];?></td>
	  <td><?php echo $show_fetch['Vegeatables'];?></td>
	  <td><?php echo $show_fetch['daily'];?></td>
	  <td><?php echo $show_fetch['others'];?></td>
	  <td><?php echo $show_fetch['total'];?></td>
	  <td><a href="show_expenses.php?del=<?php echo $show_fetch['Id'];?>">
          <span style="color:red"class="glyphicon glyphicon-trash"></span>
        </a>
		&nbsp;&nbsp;&nbsp;<a href="update_expenses.php?edit=<?php echo $show_fetch['Id'];?>">
          <span class="glyphicon glyphicon-pencil"></span>
        </a></td>
	  </tr>
	  <?php
  }
  ?>
  <tbody>
    
    
  </tbody>
</table>
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
	echo "you are not logged in";
}
?>