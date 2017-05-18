<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
include("coon.php");
include("change.php");



if($_POST['show']){
$id=$_POST['id3'];
$sql="SELECT * FROM `blogtexts` where id=$id";
$qurr=$coon->query($sql);
$arr= $qurr->fetch_array();
//$a=md5($arr['id'])

?>
<h1>id:<?php echo $id?></h1>
regdata:<?php echo $arr['regdata']?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;title:<?php echo $arr['title']?>
<h2>body:</h2><?php echo str($arr['body']) ?>
<?php
}
?>
</body>
</html>