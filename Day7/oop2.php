<?php
require_once "oop.php";//เรียกใช้งาน ไฟล์ class family อยู่
/**
 * การสืบทอด คุณสมบัติ คลาส ลูก 
 */
class male extends family
{
  public function showtext()
  {
    echo "Father Name : " . $this->Myfather() . "<br>";
    echo "Monther Name : " . $this->MyMon() . "<br>";
    echo male::$age;
  }

}
$obj = new male;
$obj->showtext();

?>