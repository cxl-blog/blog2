<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<script type="text/javascript">
function MM_popupMsg(msg) { //v1.0
  alert(msg);
}
</script>
</head>


<body>
<?php
include("coon.php");

$a=$_POST['submit'];
  if($a)
  {
	  $sql="INSERT INTO `blogtexts` ( `regdata`,`title`, `body`) VALUES ('$_POST[date]',
	   '$_POST[title]', '$_POST[body]')";
	   if($coon->query($sql))
	   
	   {	
		    header('refresh:3;url=vlans.php');
			echo "新增成功，3秒返回";
			  } 
	   
	   
  } 
  //$b="INSERT INTO `t` ( `title`,`uid`,`regdata`, `remark`) VALUES ('$_POST[title]',
	//   '$_POST[uid]', '$_POST[regdata]', '$_POST[remark]')";
	  // echo $b;
	  

?>

</body>
</html>