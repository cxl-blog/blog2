<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>

<?php
$id3=$_POST['id2'];
if($_POST['delete'])
{
?>
<form action="delete.php?id=<?php echo $id3 ?>" method="GET" name="form1">
  <p>确认删除id=<?php echo $id3 ?>数据？  </p>
    <input name="id3" type="hidden" value="<?php echo $id3 ?>" />
  <p>
  <input type="submit" name="submit2" id="submit2" value="ok" />
  </p>
</form>
<?php
}

?>
</body>
</html>