<?php
/**
 * Created by PhpStorm.
 * User: YOGA
 * Date: 2017/7/5
 * Time: 11:50
 */
error_reporting(E_ALL || ~E_NOTICE);
include("coon.php");
$sql="SELECT * FROM `teacher`";
$quest=$dbh->query($sql);
$response=array();
while($row=$quest->fetch(PDO::FETCH_ASSOC))
{
    $response[]=$row;
    //echo $row;
}
//echo $response;
echo json_decode($response , JSON_UNESCAPED_UNICODE);

?>