<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<hr size="10" color="#666666" />
<h2 class="ys1">评论 :</h2>
<hr />
<p>
<?php
include ("coon.php");
include("../pagevlans/page.php");
$id=$_POST['id3'];
$sql="SELECT * FROM `comments` where id=$id";
$qurr=$coon->query($sql);
$rows=mysqli_num_rows($qurr);
$pagesize=2;
if($rows>$pagesize)
{
	$pagela=new php1($rows,$pagesize);
	$pagela->pagela();
	$offset=$pagela->offset();
	//$pagenum=ceil($num/$pagesize);
	//$page=$_GET['page'];
	/*if($page<=1)
		$page=1;
    $offset=($page-1)*$pagesize;
	$page_list=$page-1;
	$page_next=$page+1;*/
	
	$sql="SELECT * FROM `comments` where id=$id LIMIT $offset,$pagesize";
	$qurr=$coon->query($sql);
	while($row=$qurr->fetch_array())
    {


//for($i=0;$i<$num;$i++) 
	

	echo("name:".$row['name']."&nbsp;&nbsp;&nbsp;");
	echo("redata:".$row['regdata']."<p>");
	echo("body:".$row['remark']."<hr>");
	 
	}
	echo ('<p>');
	echo ("第 $page/$pagenum 页 共 $num 条信息 ");
	echo ("&nbsp;&nbsp;");
	//echo ("<a href=?page=1>首页</a>&nbsp;&nbsp;");
	?>
    <a href="?page=1" target="bottomFrame">首页&nbsp;&nbsp;</a>
    <?php
	if($page_list>=1)
    {
		//echo ("<a href=?page=$page_list>上一页</a>");
		?><a href="?page=<?php echo $page_list ?>" target="bottomFrame">上一页&nbsp;&nbsp;</a>
    
    <?php
	//echo ("&nbsp;&nbsp;");
	}
	if($page_next<=$pagenum)
	
    //echo ("<a href=?page=$page_next>下一页</a>&nbsp;&nbsp;");
	//echo ("<a href=?page=$pagenum>末页</a>&nbsp;&nbsp;跳转");
	?>
    <a href="?page=<?php echo $page_next ?>" target="bottomFrame">下一页&nbsp;&nbsp;</a>
    <a href="?page=<?php echo $pagenum ?>" target="bottomFrame">末页&nbsp;&nbsp;</a>
    
    <?php
	
	
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
   
     <option value="?page=<?php echo $i ?>" selected="selected"><?php echo $i ?></option>";
     <?php
     }
	 ?>
     </select>
     <?php
}

else
{
	$sql="SELECT * FROM `comments` where id=$id";
	$qurr=$coon->query($sql);
	while($row=$qurr->fetch_array())
    {


//for($i=0;$i<$num;$i++) 
	

	echo("name:".$row['name']."&nbsp;&nbsp;&nbsp;");
	echo("redata:".$row['regdata']."<p>");
	echo("body:".$row['remark']."<hr>");
	 
	}
	
	}
?>
</body>
</html>
