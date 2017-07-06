<?php
/**
 * Created by PhpStorm.
 * User: YOGA
 * Date: 2017/7/3
 * Time: 13:17
 */
$x="nihahii1ihu";
//echo $_SERVER['SERVER_ADDR'];
echo strpos($x,"hu");
$a=5;
$d=7;
echo $a+$d;
echo (date("H"));
$a=array("sss","11","wwww");
echo sizeof($a);//sizeof  =count  查看数组的长度
$r[0]=1;
$r[1]=2;
print_r($r);  //sort()数组排序是  会按照元素的大小（a） 或者数字的大小排序
echo $_SERVER['PHP_SELF'];

class mysql{
    public $id;
    public $sqltype;
    public $sqlname;
    public $password;
    function __construct($id,$sqltype,$sqlname,$password)
    {
        $this->id=$id;
        $this->sqltype=$sqltype;
        $this->sqlname=$sqlname;
        $this->password=$password;
    }
    function coon(){

        $host="localhost";
        $user="root";
        $dbs="$this->sqltype:host=$host;dbname=$this->sqlname";
        try{
            $mysql=new PDO($dbs,$user,$this->password,array(PDO::ATTR_AUTOCOMMIT=>true));
            $mysql->query("SET NAMES utf8");

        }catch (PDOException $e)
        {
        die ("Error!: " . $e->getMessage() . "<br/>");}
    }
}
$Mysql=new mysql("","mysql","sql","");
$Mysql->coon();
echo "这是第几行".__FILE__;  //__FILE__等同于$_server["php_self"]
echo $_POST['name'];
class myclass{
    public $name;
    function setName($name)
{
    $this->name = $name;
}
    

}

?>
<html>
<body>
<form action="<?php  $_SERVER['PHP_SELF']?>" method="POST">
    name:<input type="text" name="name">
    <input type="submit" value="提交">

</form>
</body>
</html>
