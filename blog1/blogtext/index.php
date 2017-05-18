<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<style type="text/css">
.la {
	text-align: center;
}
#la1 tr #id1 {
	background-color: #0FC;
}
.ys2 {
	text-align: right;
}
</style>
</head>

<body>
<?php
 include("coon.php");
 //if($_GET['name']!="")
 //$name=$_GET['name'];
 //echo $name;

 ?>
 
 
<table width="300" height="40" border="1"  align="center" bordercolor="#CC0033" id="la1"> 
<caption>&nbsp;
</caption> 
 <?php
 
 $sql  = "SELECT * FROM `blogtexts`";
 $qurr=$coon->query($sql);
 
 $rows=mysqli_num_rows($qurr);
 $sqlname="`blogtexts`";

 include("change.php");
 ?>
 
<table border="1" align="center">
  <tr>
    <td width="17" class="la">id</td>
    <td width="27" class="la">title</td>
    <td width="60" class="la">regdata</td>
    <td width="92" class="la">操作</td>
  </tr>
  <?php
  include("../pagevlans/pagetest.php");
  $pagesize=2;
if($rows>$pagesize)
{

      $pagela=new php1($rows,$pagesize);
      $pagela->pagela();
      $offset=$pagela->offset();
  $sql  = "SELECT * FROM `blogtexts`LIMIT $offset,$pagesize";
  $qurr=$coon->query($sql);
  while($row=$qurr->fetch_array())
  {
 ?>
  <tr>
    <td class="la"><?php echo $row['id'] ?></td>
    <td class="la"><?php echo $row['title'] ?></td>
    <td class="la"><?php echo $row['regdata'] ?></td>
    <td class="la">
    
    <form id="form3" name="form3" method="post" action="show.php?id= <?php echo $row['id']?>">
        <input name="id3" type="hidden" value="<?php echo $row['id'] ?>" />
        <input type="submit" name="show" id="show" value="查看" /> 
</form>
</td>
</tr>
<?php
	
   }
}
else
{
	 while($row=$qurr->fetch_array())
	 {
 ?>
  <tr>
    <td class="la"><?php echo $row['id'] ?></td>
    <td class="la"><?php echo $row['title'] ?></td>
    <td class="la"><?php echo $row['regdata'] ?></td>
    <td class="la">
    
    <form id="form3" name="form3" method="post" action="show.php?id= <?php echo $row['id']?>">
        <input name="id3" type="hidden" value="<?php echo $row['id'] ?>" />
        <input type="submit" name="show" id="show" value="查看" /> 
</form>
</td>
  </tr
  
 >
 <?php
	}
}
 ?>
 </table>
<p>&nbsp;</p>
<form id="form4" name="form4" method="post" action="addapp.php">
  <input type="submit" name="add" id="add" value="添加" />
</form>
</body>
</html>