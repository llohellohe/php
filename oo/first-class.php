<?php

 class Person{
	private $name="default-name";

	static $age=0;

	 const ABC=100;

	function Person($name){
		$this->name=$name;
	}

	function __construct($name){
		$this->name="cons $name";		
	}

	function getName(){
		return $this->name;
	}

	function setName($name){
		$this->name=$name;
	}

	function __destruct(){
		echo "I am destructing\n";
	}
}

$p1=new Person('yangqi');

echo $p1->getName()."\n";

$p1->setName("qkj");

echo $p1->getName()."\n";

echo "==========static=========";


echo Person::$age."\n";
echo Person::$age++."\n";
echo Person::$age."\n";

?>