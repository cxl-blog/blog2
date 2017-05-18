<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>

<?php
$date=date('Y-m-d');
if($_POST['add'])
{


?>
 <form action="add.php" method="post" name="form1">
 
   <p>
     <input name="date" type="hidden" value="<?php echo $date ?>" />
     创建时间：<?php echo $date ?>
     <br />
     <label for="title"></label>
     title：
     <input name="title" type="text" id="title" size="50" />
   </p>
   <p>body：<br/>
     <label for="body"></label>
     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <textarea name="body" id="body" cols="45" rows="5"></textarea>
     <br />
   </p>
   <p>
     <input name="submit" type="submit" id="submit" value="提交" />
     <br />
   </p>
</form>
<?php
}
?>
</body>
</html>
