<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
$conn= mysql_connect("localhost","root","")
or die("连接错误");

mysql_select_db("sql1",$conn);
mysql_query("SET NAMES UTF8");

$url=$_SERVER["REQUEST_URI"];  //取得url
$url=parse_url($url);             //解析url

$sql  = "SELECT * FROM `t`";
$qurr=mysql_query($sql);
$rows=mysql_num_rows($qurr);

$pagesize=3;


if($rows>$pagesize)
{
	
//$page_show=5;
	$pagenum=ceil($rows/$pagesize);
	$page=$_GET['page'];
	if($page<=1)
		$page=1;
	$offset=($page-1)*$pagesize;
	$page_list=$page-1;
	$page_next=$page+1;
	$sql  = "SELECT * FROM `t` LIMIT $offset, $pagesize";
	$qurr=mysql_query($sql);
	//$row=mysql_fetch_array($qurr);
	while ($row=mysql_fetch_array($qurr))
	{
		echo ("<hr><br>".$row['id']."|".$row['title']);
	}
	echo ('<p>');
	echo ("第 $page/$pagenum 页 共 $rows 条信息");
	
    echo ("<a href=?page=$page_list>上一页</a>");
    echo ("&nbsp;&nbsp;");
    echo ("<a href=?page=$page_next>下一页</a>");
	echo ("<br>");
	
   	$pagenav.="跳到<select name='topage' size='1' onchange='window.location='?page=.'+this.value>";
	//$pagenav.= "跳到<select name="topage" size="1" onchange="window.location=?page=.'+this.value'"></select>";
	
    for($i=1;$i<=$pagenum;$i++)
    {

		if($i==$page) 
			$pagenav.="<option value='$i'>$i</option>";

		else 
			$pagenav.="<option value='$i'>$i</option>";

    }

    $pagenav.='</select>';

	echo '<div class="pages">'.$pagenav. '</div>' ;

	
	
	
}
else
{
	$sql  = "SELECT * FROM `t`";
	$qurr=mysql_query($sql);
	//$row=mysql_fetch_array($qurr);
	while ($row=mysql_fetch_array($qurr))
	{
		echo ("<hr><br>".$row['id']."|".$row['title']);
	}
}
?>

</body>
</html>