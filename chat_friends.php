<?php
include("db_connection.php");
session_start();
if($_SESSION['email']==true)
{
	include('header.php');
	$ee=$_SESSION['email'];
	if(isset($_REQUEST['chat']))
	{
		$chat=$_REQUEST['chat'];
		$chat_query=mysql_query("select * from reg where Id='$chat'");
		$chat_fetch=mysql_fetch_array($chat_query);
	    $name=$chat_fetch['Email'];
	}
	if(isset($_POST['send']))
	{
		$message=$_POST['message'];
		$insert=mysql_query("insert into chat (Sender,Receiver,Message)
		value('$ee','$name','$message')");
		if($insert)
		{
			echo '<script language="javascript">';
    echo 'alert("Message Sent"); location.href="friends.php"';
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
<body style="background-image:url('image/friends.jpg');overflow-y: scroll;
overflow-x: hidden;">
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
	   <div class="col-lg-3"></div>
	   <form method="post">
	  <div class="col-lg-5" style="background-color:white;border-radius:13px;box-shadow:10px 10px 10px 10px #c4b4b4;">
	   <h1 class="text-center" style="margin-top:20px;font-size:30px;color:#552e6b;">
	 <i>Chat With <?php echo $chat_fetch['Name'];?> <?php echo $chat_fetch['Lname'];?></i></h1><br>
	<form method="post">
	
		<div>	
	 <textarea name="message" id="area" style="width:100%;height:200px;">
      
  </textarea>
  
  </div>
  <div class="text-center">
 <input type="submit" value="Send"
style="margin-top:10px;margin-left:40px;background-color:#4c76b5;
border-radius:3px;border:1px solid #4c76b5;color:white;padding:2px;font-size:16px;"
 name="send">
 <br>
 <br>
 </div>
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
</body>
</html>
<?php
include('footer.php');
}
else
{
	echo "You are not logged in";
}
?>