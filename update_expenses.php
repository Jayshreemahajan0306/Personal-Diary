<?php
include("db_connection.php");
session_start();
if($_SESSION['email']==true)
{
	include("header.php");
	$ee=$_SESSION['email'];
	if(isset($_REQUEST['edit']))
   {
	   $edit=$_REQUEST['edit'];
	   $edit_query=mysql_query("select * from expenses where Id='$edit'");
	   $edit_fetch=mysql_fetch_array($edit_query);
   }
   if(isset($_POST['update']))
   {
	  $email=$ee;
		$date=$_POST['date'];
		$grocery=$_POST['grocery'];
		$vegeatables=$_POST['vegeatables'];
		$daily=$_POST['daily'];
		$other=$_POST['other'];
		$total=$grocery+$vegeatables+$daily+$other;
	  
	  $update=mysql_query("update expenses SET Email='$ee',Date='$date',
	  Grocery='$grocery',Vegeatables='$vegeatables',daily='$daily',Others='$other',
	  total='$total'
	  where Id='$edit'");
      if($update)
	 {
			echo '<script language="javascript">';
    echo 'alert("Successfully Updated"); location.href="show_expenses.php"';
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
	    <input type="date" value="<?php echo $edit_fetch['Date'];?>"style="border:none;padding:10px;width:200px;border-bottom:1px solid black;margin-left:40px;font-size:15px;" 
		name="date">
	    <br>
	    <br>
		   <span style="margin-left:-150px;color:#552e6b;font-size:20px;">Add Expenses - </span> 
	 <br>
	 <br>
	 <span style="color:#756f6f;font-size:20px;margin-left:50px;">Grocery</span> 
	   <input type="number" value="<?php echo $edit_fetch['Grocery'];?>"style="border:none;padding:10px;width:200px;border-bottom:1px solid black;margin-left:60px;font-size:15px;" name="grocery">
	 <br>
	 <br>
	 <span style="color:#756f6f;font-size:20px;margin-left:50px;">Vegeatables</span> 
	   <input type="number" value="<?php echo $edit_fetch['Vegeatables'];?>"style="border:none;padding:10px;width:200px;border-bottom:1px solid black;margin-left:20px;font-size:15px;" name="vegeatables">
	 <br>
	 <br>
	 <span style="color:#756f6f;font-size:20px;margin-left:50px;">Daily Expenses</span> 
	   <input type="number" value="<?php echo $edit_fetch['daily'];?>"style="border:none;padding:10px;width:200px;border-bottom:1px solid black;margin-left:0px;font-size:15px;" name="daily">
	 <br>
	 <br>
	 <span style="color:#756f6f;font-size:20px;margin-left:50px;">Others</span> 
	   <input type="number" value="<?php echo $edit_fetch['others'];?>"style="border:none;padding:10px;width:200px;border-bottom:1px solid black;margin-left:60px;font-size:15px;" name="other">
	 <br>
	 <br>
<input type="submit" value="Update"
style="margin-top:10px;margin-left:40px;background-color:#4c76b5;
border-radius:3px;border:1px solid #4c76b5;color:white;padding:2px;font-size:16px;"
 name="update">
	 </div><br>
	</form>
	  </div>
    </div>
  </div>
</div><br>
</body>
<?php
}
else
{
	include("footer.php");
	echo "you are not logged in";
}
?>