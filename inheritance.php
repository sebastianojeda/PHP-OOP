<?php
class Animal{
	public $Name;
	public $lastName;
	public $scienceName;
	public $gender;
	public $bark;
	public $meow; 
	
	function __construct($Name, $lastName, $scienceName, $gender, $bark, $meow)
	{
		$this->Name = $Name;
		$this->lastname = $lastName;
		$this->sciencename = $scienceName;
		$this->gender = $gender;
		$this->bark = $bark;
		$this->meow = $meow;

	}
	function getName(){
		return "This is my " . $this->Name . " and last " . $this->lastname;
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

$blah = new Animal("Fuzz", "Buzz", "Gray", "other", "21", "meow");
print "Animal 1 is a" . $blah->getName();


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
    	$this->ferrari . "and the " . $this->porsche . ".";
	}

}

class hardFind extends car{
		function WHAT() {
			return $this->Mustange;
		}

}

class BMW extends car{
	function Beamer() {
		return $this->BMW;
	}
}

$carPerson = new car("BMW M6 ", "Porsche Spyder gts ", "tesla s model", "Ferrari f12 ", "corvette Z06", "64 Mustange fastback");
print $carPerson->getName();