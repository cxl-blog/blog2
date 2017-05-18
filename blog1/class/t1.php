<?php
/**
 * Created by PhpStorm.
 * User: sory诺
 * Date: 2017/4/14
 * Time: 10:26
 */
class mypc
{
      public $name;
      private $id;

      function __construct($name)
      {
            return $this->name=$name;

      }
      function id()
      {
            $this->id=21;
            echo $this->id;
      }
      function __destruct()
      {
            //echo "diaoyongjieshu";// TODO: Implement __destruct() method.
      }
}
class  mypc2 extends mypc
{
      function dy()
      {
            echo "chengg";
      }
}
$name="er";
$mypc=new mypc2($name);
echo $mypc->name;
$mypc->id();

?>