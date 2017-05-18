<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>

<style type="text/css">
.anniu1 {
	font-size: 12px;
	color: #F00;
}
</style>
</head>

<body>
   <?php
	
	//include("blogtext/coon.php");
 /* if($_GET['OUT'])
  {
    setcookie("cookie","out");
    echo "<script language=\"javascript\"> location.href='login.php';</script>";



  }

  if($_POST['id']=="admin")
  {
    $uid=md5($_POST[uid]);

    if($uid=='76dd4ef06ba00b107cd804ea94f4bee7')
  {
    setcookie("cookie","ok");
     echo  "<script language=\"javascript\">location.href='login.php';</script>";
  }
  }
  */

 
?>

  <SCRIPT language=javascript>
  
  //include("../blogtext/coon.php");
  //$sql  = "SELECT * FROM `users`";
  //$qurr=mysql_query($sql);
  //$b=0;
 
  function checklogin()
  {

     /*while($row=mysql_fetch_array($qurr))
  {
    //static $b = 0;
  if($row['name']==myform.name1.value)
  {   
    $b++;
    $a=md5(myform.password1.value);
    if($a==$row['password'])
    {
      
            //setcookie("cookie","ok");
      //header('refresh:3;url=../blogtext/vlans.php');
      
      if($_POST['anniu']=="on")
      {
        setcookie("username",$name,time()+60*60*24);
        setcookie("password",$password,time()+60*60*24);
        }
      alert( "登录成功！3秒后转入、、、、");
      return ture;
      break;
    }
    else
    {
      //header('refresh:3;url=login.php');
      alert("密码错误！3秒后返回登录");
      myform.password1.focus();
      return false;
      break;

    }
    
  }
  
  }
  if($b==0)
  {
    //header('refresh:3;url=login.php');
      alert("用户名错误！3秒后返回登录");
      myform.name1.focus();
      return false;

  }
 */


  if(myform.name1.value=="")
  {
  	alert("请输入账号");
    myform.name1.focus();
    return false;
  }

  if(myform.password1.value=="")
  {
  	alert("请输入密码");
    myform.password1.focus();
    return false;
  }

  }
  </script>

<p>&nbsp; </p>

<form id="myform" name="myform" method="post" action="load.php" onSubmit="return checklogin()";)>
  <p>
    <label for="name1"></label>
  用户名：
  <input type="text" name="name1" id="name1" value="<?php if(isset($_COOKIE['username'])) echo $_COOKIE['username'];?>" />
  <br />
  <br />
  密码：  &nbsp;&nbsp;&nbsp;
  <label for="password1"></label>
  <input type="text" name="password1" id="password1" value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password'];?>" />
  <input name="anniu" type="checkbox" id="anniu" value="ok"/>
  <span class="anniu1">保存登录信息</span></p>
  <p>&nbsp;</p>
  <p>
    <input type="submit" name="submit" id="submit" value="登录" />
  </p>
  <p><a href="useradd.html">新用户，请注册！</a></p>
</form>
</body>
</html>