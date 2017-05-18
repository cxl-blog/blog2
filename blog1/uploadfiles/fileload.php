<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
	$upload_dir=getcwd()."\\files\\";
	if(!is_dir($upload_dir))
		mkdir($upload_dir);
	function makefilename()
	{
		$curtime=getdate();
		//$filename=$curtime['year'].$curtime['month'].$curtime['mday'].$_FILES['file1']['type'];
		$filename=$_FILES['file1']['name'];
		return $filename;

	}
	$newfilename=makefilename();
	$newfile_dir=$upload_dir.$newfilename;
	if(file_exists($_FILES['file1']['tmp_name']))
	{
		move_uploaded_file($_FILES['file1']['tmp_name'], $newfile_dir);
	}
	else
	{
		echo  "error";

	}
	echo ("客户端文件：".$_FILES['file1']['name']."<BR>");
	echo ("文件类型：".$_FILES['file1']['type']."<BR>");
	echo ("文件大小：".$_FILES['file1']['size']."<BR>");
	echo ("服务器临时文件名：".$_FILES['file1']['tmp_name']."<BR>");
	echo ("上传后文件名：".$newfile_dir."<br>");


?>

文件上传成功[<a href="upload.html">继续上传</a>]

</body>
</html>
