<?php
/**
 * Created by PhpStorm.
 * User: YOGA
 * Date: 2017/7/4
 * Time: 17:30
 */
namespace test\php;//这是php对文件的操作；
//print_r($_SERVER);
$path=$_SERVER['HOMEDRIVE']."\\php文件";
//phpinfo();
if(!is_dir($path)) {
    mkdir(iconv("utf-8", "GB2312//IGNORE", $path), 0777, true);
    echo "创建成功";
    }
else
    echo "文件目录已存在";


?>
<html>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
    <select name="a">
        <option value="m">男</option>
        <option value="n">女</option>
    </select>
    <input type="text" name="b" >
    <input type="submit" value="ok">
</form>
</html>
