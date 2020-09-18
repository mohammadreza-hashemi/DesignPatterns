<?php

interface imagePath
{
    public function  path();
}

interface videosPath
{
    public function videosPath();
}

trait myApp{
    public function mytrate(){
        return 'hello my traite ';
    }
}

 class Test implements imagePath {

    use myApp;
    public $name='mohammadreza';
    protected $lastname='hashemi';
    const age=21;
    public static $city='brojerd';

    public function Person()
    {
        echo $this->name.' '.$this->lastname .' '.Test::age;
    }
    public function interface(){
        return __CLASS__. '  '. __METHOD__.$this->mytrate();
    }
    public function path(){
        return 'abstract methodology';
    }
}



$obj=New Test();
echo $obj->Person();
echo '<br>';
echo $obj::$city;
echo '<br>';
echo $obj->interface();
echo '<br>';