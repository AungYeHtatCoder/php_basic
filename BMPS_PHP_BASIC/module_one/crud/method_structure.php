<?php
	class Car {
		function best_car(){
			echo "Hello Customer This Car is the best in the world";
		}
		function confot_car(){
			echo "Hello Customer This Car is the good in the world";
		}
		function vip_car(){
			echo "Hello Customer This Car is the good in the world";
		}
	}

	$methods=get_class_methods('Car');

	foreach ($methods as $method) {
		echo $method . "<br>";
	}

	if (method_exists('Car','vip_car')){
		echo "You Mehtod is right";
	}else {
		echo "You Mehtod is not right";
	}