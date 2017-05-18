<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
include("../blogtexts/coon.php");
if($_POST['submit1'])
{
$date=$_POST['date'];
$sql="INSERT INTO `comments` (`id`,`name`,`regdata`,`remark`)  VALUES ('$_POST[id]','$_POST[name]','$date', '$_POST[remark]')";
      if($coon->query($sql))
	   
	   {	
		    header('refresh:3;url=../blogtexts/vlans.php');
			echo "评论成功，3秒返回";
			  } }
	


?>
</body>
</html>