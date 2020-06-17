<?php
//در سینگل تون فقط میتوانیم یک بار شی بسازیم 

class  Singleton{

    private static $_instanse = null;

    public $name='mohammadreza';
    public static $lastname='hashemi';
    const AGE=21;


    private function __constrauct(){

    }
    private function __clone(){

    }
    public static function getInstanse()
    {
        if(!is_object(self::$_instanse)){
            self::$_instanse=new Singleton();
            return self::$_instanse;
        }
    }
    public function greetMe()
    {
        echo 'Hello, this method is called by using a singleton object..';
    }
    public function singletone()
    {
        return $this->name.$this::$lastname;;
    }

    public  function age()
    {
        return $this::AGE;
    }

}

// $obj= new Singleton();
// echo $obj->singletone();
// echo '<br/>';

$obj1=Singleton::getInstanse();
$obj2=Singleton::getInstanse();
$obj3=Singleton::getInstanse();

$obj1->greetMe();
// $obj2->greetMe();
// $obj3->greetMe();
