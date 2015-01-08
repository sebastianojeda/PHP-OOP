<?php

	// class Car
	// {
	// 	public $Name = "BMW i8";
	// 	public $Brand = "BMW";
	// 	public $Price = "135,700";


	// 	function getName(){
	// 		return “{$this>Name}” .
	// 		“{$this>Price}”;		
	// 	}
	// }

	// $BMW = new BMW();
	// $BMW>Name = “BMW i8”;
	// $BMW>Brand = “BMW”;
	// $BMW>Price = "135,700";

	// 	print “The BMW i8 is a {$BMW>
	// 	getName()}.”;

		
 //    class Seb
	// {
	// 	public $firstName = "sebastian";
	// 	public $lastName = "ojeda";
	// 	public $age = "15";	
			
	// 	function getName(){
	// 		return “{$this>firstName}” .
	// 		“{$this>$lastName}”;	
	// 	}
	// }
	// 	$dog1 = new Dog();
	// $dog1>firstName = “Sebastian”;
	// $dog1>lastName = “ojeda”;
	// print “The dog’s name is {$dog1>getName()}.”;

	// 	class ice
	// {
	// 	public $Name = "ice";
	// 	public $state = "frozen";
	// 	public $temp = "cold";


	// 	function getName(){
	// 		return “{$this>Name}” .
	// 		“{$this>temp}”;		
	// 	}
	// }

	// $BMW = new BMW();
	// $BMW>Name = “BMW i8”;
	// $BMW>Brand = “BMW”;
	// $BMW>Price = "135,700";

	// 	print “The BMW i8 is a {$BMW>
	// 	getName()}.”;


		// Lecture two work

	//EXAMPLE 1
		class Bike{
			public $frame;
			public $handleBar;
			public $wheels;
			public $pedals;
			
			function __construct($frame, $handleBar, $wheels, $pedals)
			{
				$this->frame = $frame;
				$this->handlebar = $handleBar;
				$this->wheels = $wheels;
				$this->pedals = $pedals;
			}

			function getName(){
				return "{$this->frame}" . "{$this->handlebar}"  . "{$this->wheels}" . "{$this->pedals}"; 
			}
		}

		$bike = new Bike("frame", "handleBar", "wheels", "pedals");
		echo "Materials needed to build a bike: {$bike->getName()}"; 

	//EXAMPLE 2
		class fish{
			public $Name;
			public $size;
			public $habitat;
			
			function __construct($Name, $size, $habitat){
				$this->name = $Name;
				$this->size = $size;
				$this->home = $habitat;
			}

			function getName(){
				return "{$this->name}" . "{$this->size}" . "{$this->home}";
			}
		}

		$Fish = new Fish("Great White Shark", "about 20 feet long", "lives in the ocean");
		echo "This is the {$Fish->getName()}"; 

		//	EXAMPLE 3
			class seb{
			public $Name;
			public $age;
			public $habitat;
			
			function __construct($Name, $age, $habitat){
				$this->name = $Name;
				$this->age = $age;
				$this->home = $habitat;
			}

			function getName(){
				return "{$this->name}" . "{$this->age}" . "{$this->home}";
			}
		}

		$Teen = new Teen("Sebastian Ojeda", "I'm 15 Years Old", "live in pasadena");
		echo "This is the {$Teen->getName()}"; 