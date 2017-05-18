<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
//$name=$_POST['name'];
$date=date('Y-m-d');
$id=$_POST['id'];
echo ("时间：".$date);
//echo $name;
if($_POST['submit'])
{
?>
<form id="form1" name="form1" method="post" action="addcomment.php">
	<input name="date" type="hidden" value="<?php echo $date  ?>" />
    <input name="id" type="hidden" value="<?php echo $id ?>" />
  <label for="remark"></label>
  <textarea name="remark" id="remark" cols="45" rows="5"></textarea>
  <input type="submit" name="submit1" id="submit1" value="提交" />
</form>
<?php
}
?>
</body>
</html>
