<?php

$fp=fopen("fileload.php","r");
$str=fread($fp,filesize("fileload.php"));
echo $str;

?>