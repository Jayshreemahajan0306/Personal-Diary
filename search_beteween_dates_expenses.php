<?php
include("db_connection.php");
session_start();
if($_SESSION['email']==true)
{
	include("header.php");
	$ee=$_SESSION['email'];
?>
<body style="background-image:url('image/expenses.jpg');overflow-y: scroll;
overflow-x: hidden;">
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
	   <div class="col-lg-2"></div>
	  <div class="col-lg-8" style="background-color:white;border-radius:13px;box-shadow:10px 10px 10px 10px #c4b4b4;">
	   <h1 class="text-center" style="margin-top:20px;font-size:30px;color:#552e6b;">
	 <i>Search Expenses Between Dates</i></h1><br>
	<form method="post">
	 <div class="text-center">
	    <span style="color:#756f6f;font-size:20px;margin-left:50px;">Date</span> 
		<input type="date" value="<?php echo $edit_fetch['Date'];?>"
		style="border:none;padding:10px;width:200px;border-bottom:1px solid black;
		margin-left:40px;font-size:15px;" name="date1">
	    <br>
		<br><span style="font-size:20px;color:#756f6f;">To</span><br>
		<span style="color:#756f6f;font-size:20px;margin-left:50px;">Date</span> 
		
	    <input type="date" value="<?php echo $edit_fetch['Date'];?>"
		style="border:none;padding:10px;width:200px;border-bottom:1px solid black;
		margin-left:40px;font-size:15px;" name="date2">
	     
	<br>
	 <br>
<input type="submit" value="Search"
style="margin-top:10px;margin-left:40px;background-color:#4c76b5;
border-radius:3px;border:1px solid #4c76b5;color:white;padding:2px;font-size:16px;"
 name="search">
 <br>
 <br>
 <br>
<?php
if(isset($_POST['search']))
	{
		$date1=$_POST['date1'];
		$date2=$_POST['date2'];
		$search_query=mysql_query("select * from expenses where Email='$ee' && 
		Date between '$date1' and '$date2'");
		$rowcount=mysql_num_rows($search_query);
		?>
		<table class="table" style="font-size:15px;">
  <thead>
    <tr>
      
      <th scope="col">Date</th>
      <th scope="col">Grocery</th>
      <th scope="col">Vegeatables</th>
      <th scope="col">Daily</th>
      <th scope="col">Other</th>
      <th scope="col">Total</th>
  
     
    </tr>
  </thead>
		<?php
		for($i=1;$i<=$rowcount;$i++)
		{
			$search_fetch=mysql_fetch_array($search_query);
		?>
		<tr>
	  <td><?php echo $search_fetch['Date'];?></td>
	  <td><?php echo $search_fetch['Grocery'];?></td>
	  <td><?php echo $search_fetch['Vegeatables'];?></td>
	  <td><?php echo $search_fetch['daily'];?></td>
	  <td><?php echo $search_fetch['others'];?></td>
	  <td><?php echo $search_fetch['total'];?></td>
	 
	  </tr>
		<?php
		}
		}
		?>
		<tbody>
    
    
  </tbody>
</table>
<br>
<br>
<br>
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
	echo "you are not logged in";
}
?>