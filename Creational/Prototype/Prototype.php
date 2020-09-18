<?php

//refrense::http://alihossein.ir/tutorials/%D8%A2%D9%85%D9%88%D8%B2%D8%B4-%D8%AF%DB%8C%D8%B2%D8%A7%DB%8C%D9%86-%D9%BE%D8%AA%D8%B1%D9%86-prototype

/**
 * A class to represent the CocaCola drink
 */
class CocaCola {

    private $fizzy;
    private $healthy;
    private $tasty;

    /**
     * init a CocaCola drink
     */
    public function __construct() {
        $this->fizzy   = true;
        $this->healthy = false;
        $this->tasty   = true;
    }

    /**
     * This magic method is required, even if empty as part of the prototype pattern
     */
    public function __clone() {
    }

}

$cola = new CocaCola();

/*
 * object(CocaCola)#1 (3) {
 *   ["fizzy":"CocaCola":private]=>
 *   bool(true)
 *   ["healthy":"CocaCola":private]=>
 *   bool(false)
 *   ["tasty":"CocaCola":private]=>
 *   bool(true)
 * }
 */
var_dump($cola);

$colaClone = clone $cola;

/*
 * object(CocaCola)#2 (3) {
 *   ["fizzy":"CocaCola":private]=>
 *   bool(true)
 *   ["healthy":"CocaCola":private]=>
 *   bool(false)
 *   ["tasty":"CocaCola":private]=>
 *   bool(true)
 * }
 */
var_dump($colaClone);
 