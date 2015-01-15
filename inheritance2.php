<?php


class Animal{
	public $firstName;
	public $lastName;
	public $scientificName;
	public $gender;
	public $weight;
	
	function __construct($firstName, $lastName, $scientificName, $gender, $weight){
		$this->name = $firstName;
		$this->lastName = $lastName;
		$this->scientificName = $scientificName;
		$this->gender = $gender;
		$this->weight = $weight;
	}

	function getName(){
		return "This is my " . $this->firstName . " and last " . $this->lastName . "and this is my scientific Name" .
		$this->scientificName . " .";
	}

}
class Dog extends Animal{
	
	function __construct($firstName, $lastName, $scientificName, $gender, $weight, $meow){
		parent::__construct($firstName, $lastName, $scientificName, $gender, $weight);
		$this->meow = $meow;
		
	}
	function greet(){
			return $this->meow;
		}
}
class Dog extends Animal{
	
	function __construct($firstName, $lastName, $scientificName, $gender, $weight, $bark)
	{
		parent::__construct($firstName, $lastName, $scientificName, $gender, $weight);
		$this->bark = $bark;
	}

	function hello(){
		return $this->bark;
	}
}

$dog = new Dog("cat", "mellow", "yellow", "male", 15, true);
print "Animal1 is a" . $dog->getName();


class family{
	public $mom;
	public $dad;
	public $sister;
	public $uncle;
		
	function __construct($mom, $dad, $sister, $uncle){
		$this->mom = $mom;
		$this->dad = $dad;
		$this->sister = $sister;
		$this->uncle = $uncle;
		
	}

	function getName(){
		return "This is my " . $this->mom . " and this is my " . $this->dad . "and this is my " .
		$this->uncle . " .";
	}

}
class grandma extends family{
	
	function __construct($mom, $dad, $sister, $uncle, $grandma){
		parent::__construct($mom, $dad, $sister, $uncle);
		$this->grandma = $grandma;
	}
	function greet(){
			return $this->$grandma;
		}
}
class sister2 extends family{
	
	function __construct($mom, $dad, $sister, $uncle, $sister2)	{
		parent::__construct($mom, $dad, $sister, $uncle);
		$this->sis2 = $sister2;
	}

	function hello(){
		return $this->sis2;
	}
}

$fam = new Fam("Mom", "dad", "sister", "uncle", "grandma", "sister");
print "this is my family" . $fam->getName();

// class {
// 	public $ ;
// 	public $ ;
// 	public $ ;
// 	public $ ;
		
// 	function __construct( ){
// 		$this-> = $ ;
// 		$this-> = $ ;
// 		$this-> = $ ;
// 		$this-> = $;
		
// 	}

// 	function getName(){
// 		return " " . $this-> . "  " . $this-> . " " .
// 		$this-> . " .";
// 	}

// }
// class  extends {
	
// 	function __construct( ){
// 		parent::__construct( );
// 		$this-> = $ ;
// 	}
// 	function greet(){
// 			return $this->$ ;
// 		}
// }
// class  extends {
	
// 	function __construct( )	{
// 		parent::__construct( );
// 		$this-> = $ ;
// 	}

// 	function hello(){
// 		return $this-> ;
// 	}
// }

// $ = new ( );
// print " " . $ -> ();