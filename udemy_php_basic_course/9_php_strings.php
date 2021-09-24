<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Introduction to object-Oriented Programming</title>
</head>
<body>
	<?php
	// Create the class
	class Person {
		// Create Properties - (Variables tied to objects)
		public $firstname;
		public $lastname;
		public $age;

		// Assigning Values to the Property Variables
		public function_construct($firstname, $lastname, $age) {
			$this->firstname = $firstname;
			$this->lastname = $lastname;
			$this->age = $age;
		}
		// Create a Method (Function tied to an Object)
		public function hello() {
			return "I am" . $this->firstname. " " . $this->lastname . " ", my age is: " . $this->age . "";
		}
			
	}

	// Creating a new person named "John Smith", who is 25 years old
	$person1 = new Person('John', 'Smith', 25);
	$person1 = new Person('Joe', 'Bob', 25);

	// Print out what the hello method returns
	echo $person1->hello();
	echo "<br>">;
	echo $person2->hello();
	?>
</body>
</html>