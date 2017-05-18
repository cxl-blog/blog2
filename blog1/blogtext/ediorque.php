<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
include("coon.php");

if($_GET['submit1'])
{   
	$id=$_GET['id1'];
    
	$sql1="UPDATE `blogtexts` SET `title`='$_GET[title]' , `regdata`='$_GET[date]',`body`='$_GET[body]' WHERE id=$id";
	
	if($coon->query($sql1));
	{   
		//echo "更改".$id;
		header('location: vlans.php');
		}
	}

?>
</body>
</html>