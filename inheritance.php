<?php

class Animal{
	public $Name ;
	public $lastName ;
	public $scienceName ;
	public $gender; 
	public $bark ;
	public $meow ; 
	
	function __construct($Name, $lastName, $scienceName, $gender, $bark, $meow)
	{
		$this->name = $Name;
		$this->lastname = $lastName;
		$this->sciencename = $scienceName;
		$this->gender = $gender;
		$this->bark = $bark;
		$this->meow = $meow;

	}
	function getName(){
		return "This is my " . $this->name . " and last " . $this->lastname;
	}
}

class wildCat extends Animal{
	
	function greet(){
		return $this->meow;
	}
}


class wildDog extends Animal{
	
	function morning(){
		return $this->bark;
	}
}
$mixed = new mixed("Fuzz", "Buzz", "Gray", "other", "21");
print "Animal 1 is a" $mixed->getName();


class Person{

	public $flavor;
	public $color;
	public $scoops;
	public $typeCone;
	public $mom;
	public $sister;
	
	function __construct($flavor, $color, $scoops, $typeCone, $mom, $sister)
	{
		$this->flavor = $flavor;
		$this->color = $color;
		$this->scoops = $scoops;
		$this->typeCone = $typeCone;
		$this->momsFlavor = $mom;
	    $this->sisFlavor = $sister;
	}

	function getName() 
	{
    return "I love" . $this->flavor . "because" . "the color is like a" . $this->color . ". I always get" . $this->scoops . "with a " . $this->typeCone . ".";
	}

}

class Mom extends Person{
		function mom();
		return $this->momsFlavor;

}

class Sis extends Person{
	function Sister();
	return $this->sisFlavor;
}

$personIcecream = new person("Chocolate Mocha", "coffee chocolate color", "3 scoops", "cake cone", "My mom always gets Green tea", "My sister always gets mint and chip")
print $personIcecream->getName();



class car{

	public $BMWm6;
	public $PorscheSpyderGts;
	public $Tesla;
	public $ferrariF12;
	public $corvetteZ06;
	public $MustangeFastBack;
	
	function __construct($BMWm6, $PorscheSpyderGts, $Tesla, $ferrariF12, $corvetteZ06, $MustangeFastBack)
	{
		$this->BMW = $BMWm6;
		$this->porsche = $PorscheSpyderGts;
		$this->tesla = $Tesla;
		$this->ferrari= $ferrariF12;
		$this->corvette = $corvetteZ06;
	    $this->Mustange = $MustangeFastBack;
	}

	function getName() 
	{
    return "I love the " . $this->corvette . "and the " . $this->tesla . ", but if i want something really pricy it's gonna be the " . 
    	$this->ferrari . "and the " . $this->porsche . ".";
	}

}

class hardFind extends car{
		function WHAT();
		return $this->Mustange;

}

class  extends Person{
	function Beamer();
	return $this->BMW;
}

$ = new person("BMW M6 ", "Porsche Spyder gts ", "tesla s model", "Ferrari f12 ", "corvette Z06", "64 Mustange fastback")
print $ ->getName();