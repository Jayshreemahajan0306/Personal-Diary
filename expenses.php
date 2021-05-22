<?php
include("db_connection.php");
if(isset($_POST['show']))
{
	header('location:show_expenses.php');
}
if(isset($_POST['search']))
{
	header('location:search_expenses.php');
}
if(isset($_POST['search_by_date']))
{
	header('location:search_beteween_dates_expenses.php');
}
session_start();
if($_SESSION['email']==true)
{
	include("header.php");
	$ee=$_SESSION['email'];
	if(isset($_POST['submit']))
	{
		$email=$ee;
		$date=$_POST['date'];
		$grocery=$_POST['grocery'];
		$vegeatables=$_POST['vegeatables'];
		$daily=$_POST['daily'];
		$other=$_POST['other'];
		$total=$grocery+$vegeatables+$daily+$other;
		$insert=mysql_query("insert into expenses (Email,Date,Grocery,Vegeatables,daily,others,total)
		value('$email','$date','$grocery','$vegeatables','$daily','$other','$total')");
		if($insert)
		{
			echo '<script language="javascript">';
    echo 'alert("Successfully Inserted"); location.href="expenses.php"';
    echo '</script>';
		}
	}
?>
<body style="background-image:url('image/expenses.jpg');overflow-y: scroll;
overflow-x: hidden;">
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
	   <div class="col-lg-3"></div>
	  <div class="col-lg-5" style="background-color:white;border-radius:13px;box-shadow:10px 10px 10px 10px #c4b4b4;">
	   <h1 class="text-center" style="margin-top:20px;font-size:30px;color:#552e6b;">
	 <i>Add Expenses</i></h1><br>
	<form method="post">
	 <div class="text-center">
	    <span style="color:#756f6f;font-size:20px;margin-left:50px;">Date</span> 
	    <input type="date" style="border:none;padding:10px;width:200px;border-bottom:1px solid black;margin-left:40px;font-size:15px;" 
		name="date">
	    <br>
	    <br>
		   <span style="margin-left:-150px;color:#552e6b;font-size:20px;">Add Expenses - </span> 
	 <br>
	 <br>
	 <span style="color:#756f6f;font-size:20px;margin-left:50px;">Grocery</span> 
	   <input type="number" style="border:none;padding:10px;width:200px;border-bottom:1px solid black;margin-left:60px;font-size:15px;" name="grocery">
	 <br>
	 <br>
	 <span style="color:#756f6f;font-size:20px;margin-left:50px;">Vegeatables</span> 
	   <input type="number" style="border:none;padding:10px;width:200px;border-bottom:1px solid black;margin-left:20px;font-size:15px;" name="vegeatables">
	 <br>
	 <br>
	 <span style="color:#756f6f;font-size:20px;margin-left:50px;">Daily Expenses</span> 
	   <input type="number" style="border:none;padding:10px;width:200px;border-bottom:1px solid black;margin-left:0px;font-size:15px;" name="daily">
	 <br>
	 <br>
	 <span style="color:#756f6f;font-size:20px;margin-left:50px;">Others</span> 
	   <input type="number" style="border:none;padding:10px;width:200px;border-bottom:1px solid black;margin-left:60px;font-size:15px;" name="other">
	 <br>
	 <br>
<input type="submit" value="Submit"
style="margin-top:10px;margin-left:40px;background-color:#4c76b5;
border-radius:3px;border:1px solid #4c76b5;color:white;padding:2px;font-size:16px;"
 name="submit">
<input type="submit" value="Show All"
style="margin-top:10px;margin-left:40px;background-color:#6b6767;
border-radius:3px;border:1px solid #6b6767;color:white;padding:2px;font-size:16px;"
 name="show">
<input type="submit" value="Search"
style="margin-top:10px;margin-left:40px;background-color:#ad5375;
border-radius:3px;border:1px solid #ad5375;color:white;padding:2px;font-size:16px;"
 name="search">
<input type="submit" value="Search Between Date"
style="margin-top:10px;margin-left:40px;background-color:#849ec9;
border-radius:3px;border:1px solid #849ec9;color:white;padding:2px;font-size:16px;"
 name="search_by_date">
	 </div><br>
	</form>
	  </div>
    </div>
  </div>
</div><br>
</body>
<?php
include("footer.php");	
}
else
{
echo "you are not logged in";
}
?>