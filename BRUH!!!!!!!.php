<?php

	/**
	* 
	*/
	class Car
	{
		public $Name = "BMW i8";
		public $Brand = "BMW";
		public $Price = "135,700";


		function getName(){
			return “{$this>Name}” .
			“{$this>Price}”;		
		}
	}

	$BMW = new BMW();
	$BMW>Name = “BMW i8”;
	$BMW>Brand = “BMW”;
	$BMW>Price = "135,700";

		print “The BMW i8 is a {$BMW>
		getName()}.”;

		
    class Seb
	{
		public $firstName = "sebastian";
		public $lastName = "ojeda";
		public $age = "15";	
			
		function getName(){
			return “{$this>firstName}” .
			“{$this>$lastName}”;	
		}
	}
		$dog1 = new Dog();
	$dog1>firstName = “Sebastian”;
	$dog1>lastName = “ojeda”;
	print “The dog’s name is {$dog1>getName()}.”;

		class ice
	{
		public $Name = "ice";
		public $state = "frozen";
		public $temp = "cold";


		function getName(){
			return “{$this>Name}” .
			“{$this>temp}”;		
		}
	}

	$BMW = new BMW();
	$BMW>Name = “BMW i8”;
	$BMW>Brand = “BMW”;
	$BMW>Price = "135,700";

		print “The BMW i8 is a {$BMW>
		getName()}.”;