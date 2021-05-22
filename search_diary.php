<?php
include("db_connection.php");
session_start();
if($_SESSION['email']==true)
{
	include("header.php");
	$ee=$_SESSION['email'];
	
?>
 <body style="background-image:url('image/diary11.jpg');overflow-y: scroll;
overflow-x: hidden;">
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
	   <div class="col-lg-3"></div>
	  <div class="col-lg-5" style="background-color:white;border-radius:13px;box-shadow:10px 10px 10px 10px #c4b4b4;">
	   <h1 class="text-center" style="margin-top:20px;font-size:30px;color:#552e6b;">
	 <i>Search Diary</i></h1><br>
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
		$search_query=mysql_query("select * from add_diary where Email='$ee' && Date='$date'");
		$search_fetch=mysql_fetch_array($search_query);
		?>
		<div style="font-size:20px;margin-top:50px;">
		<?php
		echo $search_fetch['Diary'];
		
	}
?></div><br><br><br><br><br>
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
	echo "You are not logged In";
}
?>
