<?php
function hit_location($roll, $k){
		
		//reverses roll 
		$rev = strrev($roll);

			// initial hit location
		if ( in_array($rev, range(1,10)) ) {
				$location = 1;
			}
		if ( in_array($rev, range(11,20)) ) {
				$location = 2;
			}
		if ( in_array($rev, range(21,30)) ) {
				$location = 3;
			}
		if ( in_array($rev, range(31,70)) ) {
				$location = 4;	
			}
		if ( in_array($rev, range(71,85)) ) {
				$location = 5;
			}
		if ( in_array($rev, range(86,100)) ) {
				$location = 6;
			}

 		// first shot was head shot  
		if($location == 1){
			if ($k == 3){
				$location = random_int(2,3);
			}
			if ($k == 4){
				$location = 4;
			}
			if ($k == 5){
				$location = random_int(2,3);
			}
			if ($k > 5){
				$location = 4;
			}
		}
		//first shot was arm

		// bug with $k == 3 for some reasion it does the arm again?
		if($location == 2 || $location == 3){
			if ($k == 3){
				$location = 4;
			}
			if ($k == 4){
				$location = 1;
			}
			if ($k == 5){
				$location = 4;
			}
		}
		//first shot was body
		if($location == 4){
			if ($k == 3){
				$location = random_int(2,3);
			}
			if ($k == 4){
				$location = 1;
			}
			if ($k == 5){
				$location = random_int(2,3);
			}
		}
		//first shot was leg
		if($location == 5 || $location == 6){
			if ($k == 3){
				$location = 4;
			}
			if ($k == 4){
				$location = $location -3;
			}
			if ($k == 5){
				$location = 1;
			}
			if ($k > 5){
				$location = 4;
			}
		}

		return $location;

	}		
?>