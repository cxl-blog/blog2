<?php
/**
 * Created by PhpStorm.
 * User: YOGA
 * Date: 2017/7/5
 * Time: 9:19
 */
//命名空间
namespace foo;
//use q\myclass as  Myclass;
use \q\myclass;
//include "t4.php";

//use q\myclass;  //use只能用来导入奇台命名空间中的类  不能导入常量  函数等。。也可以导入全局类
//use test\php\q\myclass;
/*class b extends myclass{
    function set(){
        echo "空间命名的规则";
    }
}
*/
$n=new myclass("cxl");
$n->showplay();
$s="babsbbdv";
function strlen($a){
    return \strlen($a)-1;

}
echo strlen($s).__NAMESPACE__;

?>