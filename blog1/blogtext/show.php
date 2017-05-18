<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style type="text/css">
.ys1 {
	color: #03F;
}
</style>
</head>

<body>
<p>
<?php
include("coon.php");
include("change.php");
include("../pagevlans/pagetest.php");
$id=$_POST['id3'];
$sql="SELECT * FROM `comments` where id=$id";
$qurr=$coon->query($sql);
//$rows=mysql_num_rows($qurr);
//$pagesize=2;
//if($rows<=$pagesize)
//{

	if($_POST['show'])
	{
	
		$sql="SELECT * FROM `blogtexts` where id=$id";
		$qurr=$coon->query($sql);
		$arr= $qurr->fetch_array();
//$a=md5($arr['id'])

	?>
		<h1>id:<?php echo $id?></h1>
		regdata:<?php echo $arr['regdata']?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;title:<?php echo 			$arr['title']?>
		<h2>body:</h2><?php echo str($arr['body']) ?>
	<?php
	}
	?>
<hr size="10" color="#666666" />
<h2 class="ys1">评论 :</h2>
<hr />
<p>
<?php

	$sql="SELECT * FROM `comments` where id=$id";
	$qurr=$coon->query($sql);
	
 	while($row=$qurr->fetch_array())
    {


//for($i=0;$i<$num;$i++) 
	

	echo("name:".$row['name']."&nbsp;&nbsp;&nbsp;");
	echo("redata:".$row['regdata']."<p>");
	echo("body:".$row['remark']."<hr>");
	 
	}
 
	?>
	<form id="form1" name="form1" method="post" action="../comments/addco.php?id=<?php echo $id ?>">
	<input name="id" type="hidden" value="<?php echo $id ?>" />
	<input name="name" type="hidden"  value="<?php //echo $name ?>"/>
  	<input type="submit" name="submit" id="submit" value="我要评论" />
	</form>
   <?php
	
/*else
{
	if($_POST['show'])
	{
	
		$sql="SELECT * FROM `blogtexts` where id=$id";
		$qurr=mysql_query($sql);
		$arr= mysql_fetch_array($qurr);
//$a=md5($arr['id'])

	?>
		<h1>id:<?php echo $id?></h1>
		regdata:<?php echo $arr['regdata']?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;title:<?php echo 			$arr['title']?>
		<h2>body:</h2><?php echo str($arr['body']) ?>
	<?php
	}
	?>
<hr size="10" color="#666666" />
<h2 class="ys1">评论 :</h2>
<hr />
<p>
<?php
    pagela($rows,$pagesize);
	$sql="SELECT * FROM `comments` where id=$id LIMIT $offset,$pagesize";
	$qurr=mysql_query($sql);
	
 	while($row=mysql_fetch_array($qurr))
    {


//for($i=0;$i<$num;$i++) 
	

	echo("name:".$row['name']."&nbsp;&nbsp;&nbsp;");
	echo("redata:".$row['regdata']."<p>");
	echo("body:".$row['remark']."<hr>");
	 
	}
 
	?>
	<form id="form1" name="form1" method="post" action="../comments/addco.php?id=<?php echo $id ?>">
	<input name="id" type="hidden" value="<?php echo $id ?>" />
	<input name="name" type="hidden"  value="<?php echo $name ?>"/>
  	<input type="submit" name="submit" id="submit" value="我要评论" />
	</form>
    <?php
	
}
	?>*/
?>

<p>
</body>
</html>