<?php
// declare(strict_types=1);

class Human{
	public $leg=2;
	private $eyes=2;
	public $nose=2;
	public $hand=2;
	public $ears=2;
	public static $name="shola";

	public function getName(){
		self::setName("Promise");
	}

	public function setName( $name){
		echo $this->name=$name;
	}

}

class Promise extends Human{
	public $height="100m";
}
$obj=new Promise;
var_dump($obj);
// Human::getName($name)

// $obj->=new Human;
// $obj->setName();



?>