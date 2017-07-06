<?php
/**
 * Created by PhpStorm.
 * User: YOGA
 * Date: 2017/7/3
 * Time: 8:58
 */
header("Content-TYpe:text/html;charset=utf-8");
include "coon.php";
$sql = "INSERT INTO users(id ,name,password,remark) VALUE ('','cjj','123456','男')";
if($dbh->query($sql)){
    echo "ok";
}


?>