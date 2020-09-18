<?php

/**
 * when we have some class and want to some way to create object this classes
 *  
 */

 // http://alihossein.ir/tutorials/%D8%A2%D9%85%D9%88%D8%B2%D8%B4-factory-design-pattern

abstract class Product //az abstract nemishe shi sakht
{
  private $sku;
  private $name;
  protected $type = null;


  public static function create($product_type)
 {

   switch($product_type)
   {
     case 'chair':

       return new Product_Chair();


      case 'table':
       return new Product_Table();


      case 'sofa':
       return new Product_Sofa();


      case 'bookcase':
       return new Product_Bookcase();

   }

}

public function test()
{
    return 'test';
}

}

class Product_Chair extends Product
{
  // protected $type = 'chair';
}

class Product_Table extends Product
{
  public function __construct(){
		echo "Product_Table is class";
	}
}

class Product_Bookcase extends Product
{
  public function __construct(){
		echo "Product_Bookcase is class";
	}
}

class Product_Sofa extends Product
{
	public function __construct(){
		echo "Product_Sofa is class";
	}

}
// /////////////////////////////

$obg1=Product::create('table');
echo '';
$obg2=Product::create('sofa');
echo '';
$obg3=Product::create('bookcase');
echo '________________<br/>';

/**
 * note:: we cant crate object in abstract class 
 */
// $obj=new Product();
// echo $obj->test();