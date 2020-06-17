<?php
require_once './Singleton.php';

class Child extends Singleton{


    public function parent()
    {
        Parent::$lastname;
    }
    public function child()
    {
        return parent::age();      
    }

}
$obj=new Child();
echo  $obj->child();