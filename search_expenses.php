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
	   <div class="col-lg-3"></div>
	  <div class="col-lg-5" style="background-color:white;border-radius:13px;box-shadow:10px 10px 10px 10px #c4b4b4;">
	   <h1 class="text-center" style="margin-top:20px;font-size:30px;color:#552e6b;">
	 <i>Search Expenses</i></h1><br>
	<form method="post">
	 <div class="text-center">
	    <span style="color:#756f6f;font-size:20px;margin-left:50px;">Date</span> 
	    <input type="date" value="<?php echo $edit_fetch['Date'];?>"style="border:none;padding:10px;width:200px;border-bottom:1px solid black;margin-left:40px;font-size:15px;" name="date">
	     
	
	 
<input type="submit" value="Search"
style="margin-top:10px;margin-left:40px;background-color:#4c76b5;
border-radius:3px;border:1px solid #4c76b5;color:white;padding:2px;font-size:16px;"
 name="search"><br>
<?php
if(isset($_POST['search']))
	{
		$date=$_POST['date'];
		$search_query=mysql_query("select * from expenses 
		where Email='$ee' && Date='$date'");
		$search_fetch=mysql_fetch_array($search_query);
		?>
		<div style="font-size:20px;">
		<br>
	 <span style="color:#756f6f;font-size:20px;">Grocery -</span> 
	 <span style="margin-left:100px;"><?php
		
		echo $search_fetch['Grocery'];
	?></span>
	<br>
	<span style="color:#756f6f;font-size:20px;">Vegeatables -</span> 
	 <span style="margin-left:65px;"><?php
		
		echo $search_fetch['Vegeatables'];
	?></span>
	<br>
	<span style="color:#756f6f;font-size:20px;">Daily Expenses -</span> 
	 <span style="margin-left:45px;"><?php
		
		echo $search_fetch['daily'];
	?></span>
	<br>
	<span style="color:#756f6f;font-size:20px;">Other Expenses -</span> 
	 <span style="margin-left:43px;"><?php
		
		echo $search_fetch['others'];
	?></span>
	<br><hr>
	<span style="color:#756f6f;font-size:20px;">Total -</span> 
	 <span style="margin-left:128px;"><?php
		
		echo $search_fetch['total'];
	?></span>
<?php	
	}
?> <br>
		</div><br><br><br><br><br>
	 </div><br>
	</form>
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
</body>
<?php
include("footer.php");
}
else
{
	echo "you are not logged in";
}
?>