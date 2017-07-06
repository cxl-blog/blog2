<?php
/**
 * Created by PhpStorm.
 * User: YOGA
 * Date: 2017/7/4
 * Time: 8:55
 */
//header("con")
namespace test\php;//类的继承，多态，多继承（接口）  //命名空间  
include "t4.php";
use MongoDB\BSON\Regex;

class myclass1
{
    public $name;

    function __construct($name)
    {
        return $this->name = $name;
    }

    function __set($name, $value)//属性构造直接调用
    {
        // TODO: Implement __set() method.
        $this->$name = $value;
    }

    function __get($name)//属性访问直接调用
    {
        // TODO: Implement __get() method.
        return $this->$name;
    }

    function showplay()
    {
        echo $this->name . __NAMESPACE__;


    }


}
    class cclass extends \q\myclass   //这里可以直接继承当前命名空间的myclass   也可以继承t4.php中myclass  这里继承t4中可以用
                                     //限定名称 q\myclass  完全限定名称 \q\myclass
    {//抽象类使用abstract  声明抽象类的方法不具有方法内容，且至少含有一个抽象方法
        //抽象类的实例化在继承抽象类中实例
        public static $one = 1;
    }

    echo cclass::$one . "\n";//：：通过这个操作符可以访问为实例化的对象的属性与方法
    $d = new cclass("ccl");
    echo $d->name;

    abstract class a
    {
    }//抽象类
//php只支持单继承，想要实现多继承要实现接口
    interface b
    {//多个接口时，接口中不能含有相同的方法  接口也可以继承
        function disply();
    }//接口中只能有const声明的常量成员，以及抽象方法  多继承时用implements 后面接接口的名字
    interface c
    {
        function add();
    }

    class d extends \q\myclass implements b, c
    {//用接口可以实现多继承
        function disply()
        {
            // TODO: Implement disply() method.
            echo $this->name;
        }

        function add()
        {
            // TODO: Implement add() method.
            $this->showplay();
        }
    }

    $a = new d("2");
    $a->disply();
    echo "<br\>";
    $a->add();

    /*$xiao=new myclass("cxl");
    $xiao->sex="nan";
    echo $xiao->sex;
    $x=new cclass("1");
    echo $x->name;
    */

    class resoutes
    {
        function getproprety($class, $proprety)
        {
            $Class = get_class($class);
            $myclass = new \ReflectionClass($Class);
            $myproprety = $myclass->getProperties($proprety);
            $myproprety->setAccessible(true);
            return $myproprety - getValue($class);


        }

        function getmethod()
        {

        }
    }


    abstract class aa
    {//多态  继承
        abstract function a();
    }

    class bb extends aa
    {
        function a()
        {
            // TODO: Implement a() method.
            echo "zhishib" . "\n";
        }
    }

    class cc extends aa
    {

        function a()
        {
            // TODO: Implement a() method.
            echo "zheshic" . "\n";
        }
    }

    function change($obj)
    {
        if ($obj instanceof aa) {
            $obj->a();
        } else
            echo "调用的不是一个";
    }

    change(new cc());
    echo time() . "\n";
    echo urlencode("你是谁");

    $url = "这是百度导航：http://www.baidu.com/";

    preg_match("([A-Za-z0-9./:-_]+)", $url, $m);
//echo $m[1];
    print_r($m);
//echo str_replace("(http://).([A-Za-z0-9./-]+)","<a href=\"\\0\">\\0</a>",$url);

?>