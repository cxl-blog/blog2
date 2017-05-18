<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
include("coon.php");


$date=date('Y-m-d');
if($_POST['edior'])
{
$id=$_POST['id'];
$sql="SELECT * FROM `blogtexts` WHERE id=$id";
$qurr=$coon->query($sql);
$row=$qurr->fetch_array();
   
 
?>
    

<form action="ediorque.php" method="get" name="form1">
  <p>id:<?php echo $id ?>
    <input type="hidden" name="id1" id="id1"  value="<?php echo $id ?>"/>
    <input name="date" type="hidden" value="<?php echo $date ?>" />
  </p>
  <p>创建时间：<?php echo $date ?>
  </p>
  <p>title：
    <label for="title"></label>
    <input type="text" name="title" id="title" value="<?php echo $row['title'] ?>" />
  </p>
  <p>body：
    <label for="body"></label>
    <textarea name="body" id="body" cols="45" rows="5"><?php echo $row['body'] ?></textarea>

  
  </p>
  <p>
    <input type="submit" name="submit1" id="submit1" value="更改" />
  </p>
</form>
<?php 

}
?>
</body>
</html>