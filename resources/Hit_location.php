<?php
function hit_location_echo($location){
			
		if ($location == 1){
			echo ' Hit the target in the Head!';
		}
		if ($location == 2){
			echo ' Hit the target in the right arm!';
		}
		if ($location == 3){
			echo ' Hit the target in the left arm!';
		}
		if ($location == 4){
			echo ' Hit the target in the body!';
		}
		if ($location == 5){
			echo ' Hit the target in the right leg!';
		}
		if ($location == 6){
			echo ' Hit the target in the left leg!';
		}
	}
?>