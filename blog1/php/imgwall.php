<?php
/**
 * Created by PhpStorm.
 * User: YOGA
 * Date: 2017/5/18
 * Time: 14:33
 */

$dir    = '../css';
$files1 = scandir($dir);
print_r($files1);
//$i=0;
//while ($files1)
//{
//    $i++;
//}
//echo $i
//$files2 = scandir($dir, 1);
//print_r($files1);
//print_r($files2);
/*function getfilecounts($ff){
    $dir = '../'.$ff;
    $handle = opendir($dir);
    $i = 0;
    while(false !== $file=(readdir($handle))){
        if($file !== '.' && $file != '..')
        {
            $i++;
        }
    }
    closedir($handle);
    return $i;
}*/
?>