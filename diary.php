<?php
include("db_connection.php");
if(isset($_POST['show']))
{
	header('location:show_diary.php');
}
if(isset($_POST['search']))
{
	header('location:search_diary.php');
}
session_start();
if($_SESSION['email']==true)
{
	include("header.php");
	if(isset($_POST['submit']))
	{
		$date=$_POST['date'];
		$diary=$_POST['diary'];
		$email=$_SESSION['email'];
		$insert=mysql_query("insert into add_diary (Email,Date,Diary) value('$email','$date','$diary')");
	if($insert)
		{
			echo '<script language="javascript">';
    echo 'alert("Successfully Inserted"); location.href="diary.php"';
    echo '</script>';
		}
	}
	
?>
<html>
<head>
<title>
</title>

<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>
<script type="text/javascript">
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() }); // convert all text areas to rich text editor on that page
 
        bkLib.onDomLoaded(function() {
             new nicEditor().panelInstance('area1');
        }); // convert text area with id area1 to rich text editor.
 
        bkLib.onDomLoaded(function() {
             new nicEditor({fullPanel : true}).panelInstance('area2');
        }); // convert text area with id area2 to rich text editor with full panel.
</script>
<script type="text/javascript" src="nicEdit-latest.js"></script>
  <script type="text/javascript">
//<![CDATA[
  bkLib.onDomLoaded(function() {
        new nicEditor({maxHeight : 200}).panelInstance('area');
        new nicEditor({fullPanel : true,maxHeight : 200}).panelInstance('area1');
  });
  //]]>
  </script>
</head>
<body style="background-image:url('image/diary11.jpg');overflow-y: scroll;
overflow-x: hidden;">
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
	   <div class="col-lg-3"></div>
	  <div class="col-lg-5" style="background-color:white;border-radius:13px;box-shadow:10px 10px 10px 10px #c4b4b4;">
	   <h1 class="text-center" style="margin-top:20px;font-size:30px;color:#552e6b;">
	 <i>Add Diary</i></h1><br>
	<form method="post">
	 <div class="text-center">
	    <span style="color:#756f6f;font-size:20px;margin-left:50px;">Date</span> 
	    <input type="date" style="border:none;padding:10px;width:200px;border-bottom:1px solid black;margin-left:40px;font-size:15px;" name="date">
	    <br>
	    <br>
		   <span style="margin-left:-150px;color:#756f6f;font-size:20px;">Add Diary</span> 
	 <br>
	 <br>
	 <div style="margin-left:50px;">
	 <textarea name="diary" id="area" style="width:100%;height:200px;">
      
  </textarea>
  </div>
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