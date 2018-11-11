<?
	function damage($numberd10, $modd10, $crits, $CanCritAccurate, $primitive, $primitivet, $proven, $provent, $tearing, $halfdamage, $testlocation, $troop, $damageType){
		
		$damage_total = 0;
  		$critTotal = 0;
		// add feature so multiple damage rolls cant crit on accurate shots
		for($j=1; $j<=$numberd10; $j++){
			$RF = 0;
			$worstCase = 0;
			//test
			$rolld10 = random_int(1,10);
			if (isset($_POST['tearing'])){
				$rolltearing = random_int(1,10);
				echo nl2br ("\n Die number $j did $rolltearing Tearing damage");
				if ($rolltearing > $rolld10){
					echo nl2br ("\n Die number $j did $rolld10 damage");
					$worstCase = 3;
					$rolld10 = $rolltearing;
				}	
			}
			if($rolld10 == 10){
				$RF = 10;
			}
			// if both proven and primitative are in use there is a bug if proven is higher then primitative proven will take priority
			if(isset($_POST['halfdamage'])){
			  		$rolld10 = ceil($rolld10/2);
			}

			if(isset($_POST['primitivet']) && $rolld10 > $primitive){
			  		$rolld10 = $primitive;
			}
			if(isset($_POST['provent']) && $rolld10 < $proven){
			  		$rolld10 =  $proven;
			}
			//Calculate damage total
			$damage_total = $rolld10 + $damage_total;

			//Crit 
			if ($RF == 10 && !isset($_POST['crits']) && $j <= $CanCritAccurate){
				
				$critDamage = 0;
				do{
				$critroll = random_int(1,10);
				$critDamage = $critroll + $critDamage;
				} while ($critroll == 10);
				$critDamage = ceil($critDamage /2);
				$critTotal = $critDamage + $critTotal;
				if(isset($_POST['primitivet'])){
					echo nl2br ("\n Die number $j damage was changed to $primitive because the wepon is primatitive + $critDamage critical damage");
				}		
				else{
					echo nl2br ("\n Die number $j did $rolld10 damage + $critDamage critical damage  ");
				}
				$worstCase = 2;
			}
			//primitive or peoven
			if (isset($_POST['primitivet']) || isset($_POST['provent'])) {
				
				if(isset($_POST['primitivet']) && $rolld10 >= $primitive && $worstCase != 2){
					echo nl2br ("\n Die number $j damage was changed to $primitive because the wepon is primatitive");
					$worstCase = 1;
				}
				if(isset($_POST['provent']) && $rolld10 <= $proven && $worstCase != 2){
					echo nl2br ("\n Die number $j damage was changed to $proven because the wepon is proven");
					$worstCase = 1;
				}	
			}
			//default condition for damage die
			if ($worstCase == 0){
				echo nl2br ("\n Die number $j did $rolld10 damage");
			}
		}
			$damage_total = $damage_total + $modd10;
		echo nl2br ("\n Damage Total = $damage_total      ");
		if ($critTotal > 0){
			if ($troop > 0){
					$critTotal = $critTotal + 5;
			}
		echo nl2br ("\n Critical damage $critTotal  \n \n"); 
		first($critTotal, $testlocation, $damageType); //returns omg lol;
		}
	}
	}


	?>