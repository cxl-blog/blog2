<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<?php
//$url=$_SERVER["REQUEST_URI"];

function pagela($rows1,$pagesize1) 
					 //$sqlname位数据库表名称
{
	//$url=$_SERVER["REQUEST_URI"];
    //$url2=$url[path];//取得url
	//$url1=parse_url($url);             //解析url
//if($rows>$pagesize)
//{
	//$pagesize=3;
//$page_show=5;
	global $pagenum,$page,$offset,$page_list,$page_next,$qurr1;
	$pagenum=ceil($rows1/$pagesize1);
	if(!isset($_GET['page']))
		$page=1;
	else
	{
		$page=$_GET['page'];
	}
	//$page= $_GET ['page'];
	if($page<=1)
		$page=1;
    $offset=($page-1)*$pagesize1;
	$page_list=$page-1;
	$page_next=$page+1;
	echo ('<p>');
	echo ("第 $page/$pagenum 页 共 $rows1 条信息 ");
	echo ("&nbsp;&nbsp;");
	echo ("<a href=?page=1>首页</a>&nbsp;&nbsp;");
	if($page_list>=1)
    {echo ("<a href=?page=$page_list>上一页</a>");
    echo ("&nbsp;&nbsp;");}
	if($page_next<=$pagenum)
    echo ("<a href=?page=$page_next>下一页</a>&nbsp;&nbsp;");
	echo ("<a href=?page=$pagenum>末页</a>&nbsp;&nbsp;跳转");
	
	
	/*$a.= ("<select name='topage' onchange='windows.location='$url[path]?page='+this.value''>");
	
	for($i=1;$i<=$pagenum;$i++)
	{
	
   
     $a.="<option value=''>$i</option>";
     }
	 $a.="</select>";
	echo '<div class="pages">'.$a. '</div>' ;
	}*/
	
	//}
	//else
	/*{
	$sql  = "SELECT * FROM `t`";
	$qurr=mysql_query($sql);
	//$row=mysql_fetch_array($qurr);
	while ($row=mysql_fetch_array($qurr))
	{
		echo ("<hr><br>".$row['id']."|".$row['title']);
	}
	}*/

	?>
	<select name="tpage"  onchange="windows.location.href='this.value'">
	<?php
	for($i=1;$i<=$pagenum;$i++)
	{
	?>
   
     <option value="../blogtext/vlans.php?page=<?php echo $i ?>" selected="selected"><?php echo $i ?></option>";
     <?php
     }
}
?>
</select>
</body>
</html>