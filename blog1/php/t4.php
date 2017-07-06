<?php
/**
 * Created by PhpStorm.
 * User: YOGA
 * Date: 2017/7/4
 * Time: 16:07
 */
namespace q;  //字符串的操作  正则表达式
class myclass{
    public $name;
    function __construct($name)
    {
        return $this->name=$name;
    }
    function __set($name, $value)//属性构造直接调用
    {
        // TODO: Implement __set() method.
        $this->$name=$value;
    }

    function __get($name)//属性访问直接调用
    {
        // TODO: Implement __get() method.
        return $this->$name;
    }

    function showplay(){
        echo $this->name.__NAMESPACE__;



    }


}
$a=new myclass("cxl");
$a->showplay();

//$a="qwertui";
 //echo $b=substr($a,1,4)."\n";
//echo substr_replace($a,"aaaaa",3,5);

?>