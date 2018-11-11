<?php
	include 'critical_effects.php';
	$rolls = $_POST['rolls'] ?? 1;
	$mod = $_POST['mod'] ?? 0;

	$number = (int)$_POST['number'] ?? 50;

	$numberd10 = $_POST['numberd10'] ?? 1;
	$modd10 = (int)$_POST['modd10'] ?? 0;
	$aim = $_POST['aim'] ?? 0;
	$lasOverload = $_POST['lasOverload'] ?? 0;
	$range = $_POST['range'] ?? 0;
	$shootingM = $_POST['shootingM'];
	$brace = $_POST['brace'];
	$shots = $_POST['shots'] ?? 10 ;
	$semi = $_POST['semi'] ?? 2;
	$auto = $_POST['auto'] ?? 4;

	$primitive = $_POST['primitive'] ?? 7;
	$proven = $_POST['proven'] ?? 3;
	


?>




<form method="POST" action="40k attack roller.php">

	<!-- <label for="rolls">Roll</label><br />
	<input type="text" id="rolls" name="rolls" value="<?=$rolls?>"><br /><br /> -->

	<!-- BS -->
	<div>
	<label for="number">BS</label><br />
	<input type="text" id="number" name="number" value="<?=$number?>"><br /><br />
	</div>

	<!-- Number of shots -->
	<div>
	Single Shot<input type="radio" name="shots" value="10" id="shots"  <?php if($shots == "10") { echo 'checked="checked"';} ?>/><br />

	Semi Burst<input type="radio" name="shots" value="0" id="shots" <?php if($shots == "0") { echo 'checked="checked"';} ?>/> 
	<input type="text" id="semi" name="semi" value="<?=$semi?>"><br />
	Full auto<input type="radio" name="shots" value="-10" id="shots" <?php if($shots == "-10") { echo 'checked="checked"';} ?>/>
	<input type="text" id="auto" name="auto" value="<?=$auto?>"><br /><br />
	</div>





	<!-- Aim -->
	<div>
	No aim<input type="radio" name="aim" value="0" id="aim"  <?php if($aim == "0") { echo 'checked="checked"';} ?>/>

	Half aim<input type="radio" name="aim" value="10" id="aim" <?php if($aim == "10") { echo 'checked="checked"';} ?>/>
	Full aim<input type="radio" name="aim" value="20" id="aim" <?php if($aim == "20") { echo 'checked="checked"';} ?>/>
	</div>	


	<!-- Range -->
	<div>
	Point blank<input type="radio" name="range" value="30" id="range"<?php if($range == "30") { echo 'checked="checked"';} ?>/>

	Short<input type="radio" name="range" value="10" id="range" <?php if($range == "10") { echo 'checked="checked"';} ?>/>
	Medium<input type="radio" name="range" value="0" id="range" <?php if($range == "0") { echo 'checked="checked"';} ?>/>
	long<input type="radio" name="range" value="-10" id="range" <?php if($range == "-10") { echo 'checked="checked"';} ?>/>
	Extreme<input type="radio" name="range" value="-30" id="range" <?php if($range == "-30") { echo 'checked="checked"';} ?>/>

	</div>		


	<!-- Shooting into melee -->
	<div> Shooting into melee?
	<input type="checkbox" name="shootingM" value="-20" <?php if(isset($_POST['shootingM'])) echo "checked='checked'"; ?>  /><br />


	Heavy weapon not braced?
	<input type="checkbox" name="brace" value="-30" <?php if(isset($_POST['brace'])) echo "checked='checked'"; ?>  /><br />
	<!-- Crits? -->
	<div> No crits?
	<input type="checkbox" name="crits" value="2"  <?php if(isset($_POST['crits'])) echo "checked='checked'"; ?>  /><br />











	<!-- Other modifiers -->
	<label for="dice">Other Modifiers</label><br />
	<input type="text" id="mod" name="mod" value="<?=$mod?>"><br /><br />

	</div>	
 	
	<!-- Damage -->
	<div>
	<label for="nd10">Number of damage dice</label><br />
	<input type="text" id="numberd10" name="numberd10" value="<?=$numberd10?>"><br /><br />
	<label for="modd10">Damage dice modifier</label><br />
	<input type="text" id="modd10" name="modd10" value="<?=$modd10?>"><br /><br />
	</div>


	<!-- Special weapon abilities -->


		<!-- Las variable setting -->
	<div>
	Non Las Or Not Overcharing<input type="radio" name="lasOverload" value="0" id="lasOverload"  <?php if($lasOverload == "0") { echo 'checked="checked"';} ?>/>
	High Power<input type="radio" name="lasOverload" value="1" id="lasOverload" <?php if($lasOverload == "1") { echo 'checked="checked"';} ?>/>
	Overload<input type="radio" name="lasOverload" value="2" id="lasOverload" <?php if($lasOverload == "2") { echo 'checked="checked"';} ?>/>
	</div>	





	<div>
	<label for="Accurate">Accurate</label>
	<input type="checkbox" name="Accurate" value="10" <?php if(isset($_POST['Accurate'])) echo "checked='checked'"; ?>  /><br />

	<label for="maximal">maximal</label>
	<input type="checkbox" name="maximal" value="1" <?php if(isset($_POST['maximal'])) echo "checked='checked'"; ?>  /><br />

	<label for="reliable">reliable</label>
	<input type="checkbox" name="reliable" value="100" <?php if(isset($_POST['reliable'])) echo "checked='checked'"; ?>  /><br />

	<label for="unreliable">unreliable</label>
	<input type="checkbox" name="unreliable" value="91" <?php if(isset($_POST['unreliable'])) echo "checked='checked'"; ?>  /><br />
	<label for="overheats">overheats</label>
	<input type="checkbox" name="overheats" value="91" <?php if(isset($_POST['overheats'])) echo "checked='checked'"; ?>  /><br />


	<label for="tearing">tearing</label>
	<input type="checkbox" name="tearing" value="Tearing" <?php if(isset($_POST['tearing'])) echo "checked='checked'"; ?>  /><br />


	<label for="twin">twin-linked</label>
	<input type="checkbox" name="twin" value="20" <?php if(isset($_POST['twin'])) echo "checked='checked'"; ?>  /><br />

	<label for="storm">storm</label>
	<input type="checkbox" name="storm" value="2" <?php if(isset($_POST['storm'])) echo "checked='checked'"; ?>  /><br />

	<label for="scatter">scatter</label>
	<input type="checkbox" name="scatter" value="10" <?php if(isset($_POST['scatter'])) echo "checked='checked'"; ?>  /><br />


	
	<label for="halfdamage">1d5 damage weapon</label>
	<input type="checkbox" name="halfdamage" value="1d5" <?php if(isset($_POST['halfdamage'])) echo "checked='checked'"; ?>  /><br />

	<label for="primitive">primitive</label>
	<input type="checkbox" name="primitivet" value="true" <?php if(isset($_POST['primitivet'])) echo "checked='checked'"; ?>  />
	<input type="text" id="primitive" name="primitive" value="<?=$primitive?>"><br />
	<label for="proven">proven</label>
	<input type="checkbox" name="provent" value="true" <?php if(isset($_POST['provent'])) echo "checked='checked'"; ?>  />
	<input type="text" id="proven" name="proven" value="<?=$proven?>"><br /><br />



	

	</div>

	<div>
	<!-- Not used -->
<!-- 	<label for="check1">Attack roll?</label>
	<input type="checkbox" name="txtCheck" value="your value" <?php if(isset($_POST['txtCheck'])) echo "checked='checked'"; ?>  /><br /> -->


	<!-- button -->
	<button type="submit">Roll the dice!</button>
	</div>
	

	

</form>


<div>
<?php
if($_POST) {

	//initial variables
	$total_hits = 0;
	$Degrees_of_success = 0;
	$Degrees_of_failure = 0;
	$multiple = 0;
	$a = 0;
	$jam = 96;
	$twin = 0;
	$scatterm = 0;

	if($shots < 10){
		$jam = 94;
	}

	if(isset($_POST['reliable'])){
		$jam = 100;
	}


	if(isset($_POST['unreliable']) || isset($_POST['overheats']) || $lasOverload == 2){
		$jam = 91;	
	}


	//Hit location function
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


		//Hit location
		if ($location == 1){
			echo ' Was a head Shot';
		}
		if ($location == 2){
			echo ' Hit the right arm';
		}
		if ($location == 3){
			echo ' Hit the left arm';
		}
		if ($location == 4){
			echo ' Hit the body';
		}
		if ($location == 5){
			echo ' Hit the right leg';
		}
		if ($location == 6){
			echo ' Hit the left leg';
		}
	}		








	echo nl2br ("\n Modified results");
	// $total_test = [];
	for($i=1; $i<=$rolls; $i++){
		$roll = random_int(1,100);
		//echo (" ");
		if ($roll >= $jam){
			echo nl2br ("\n Weapon has jammed!");
		}

		if($aim > 0 && isset($_POST['Accurate'])){
  		   $a = 10;
		}
		if($range > 0 && isset($_POST['scatter'])){
  		   $scatterm = 10;
		}
		if(isset($_POST['twin'])){
  		   $twin = 20;
		}
		
		$x = $number+$mod+$aim+$range+$shootingM+$shots+$a+$brace+$twin+$scatterm;
		//echo $x;
		
		echo nl2br ("\n Target = $x");
		echo nl2br ("\n Roll = $roll");
		if ($roll<=$x){
		$total_hits++;
		$Degrees_of_success	 = (floor($x/10) - floor($roll/10))+1;
		echo nl2br ("\n DOS = $Degrees_of_success\n\n");

		

		}

		
		else{
			$Degrees_of_failure = (floor($x/10) - floor($roll/10))-1;	
			echo nl2br ("\n DOF = $Degrees_of_failure\n\n");	
		}

		// @$total_test[$roll]++;
	}	

	//Damage function
	function damage($numberd10, $modd10, $crits, $CanCritAccurate, $primitive, $primitivet, $proven, $provent, $tearing, $halfdamage){
		echo $crits;
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
		echo nl2br ("\n Critical damage "); echo first($critTotal); //returns omg lol;
		}
		
		
	}
	}

		if ($lasOverload == 1){
			$modd10 = $modd10 + 1;
		}
		if ($lasOverload == 2){
			$modd10 = $modd10 + 2;
		}

		if (isset($_POST['maximal'])){
			$numberd10 = $numberd10 + 1;
		}
		if (isset($_POST['scatter']) && $range > 10){
			$modd10 = $modd10 + 3;
		}
		if (isset($_POST['scatter']) && $range < 10){
			$modd10 = $modd10 - 3;
		}

		$CanCritAccurate  = $numberd10;



		//Single shot
		if ($shots == 10 && $Degrees_of_success >= 1){
			$k = 1;

		

		if (isset($_POST['Accurate']) && $aim > 0){
			$j = 3;
			if(3 >= ceil($Degrees_of_success/2)){
				 	$j = ceil($Degrees_of_success/2);	 	
			}

			
			$numberd10 = $numberd10 + $j - 1;
		}



		

		echo "The shot  "; hit_location($roll, $k);
		damage($numberd10, $modd10, $crits, $CanCritAccurate, $primitive, $primitivet, $proven, $provent, $tearing, $halfdamage); 
		if (isset($_POST['twin']) && $Degrees_of_success >= 2){
			echo nl2br ("\n \nThe second shot  ");
			hit_location($roll, $k);
			damage($numberd10, $modd10, $crits, $CanCritAccurate, $primitive, $primitivet, $proven, $provent, $tearing); 
		}
		}




		//Semi auto
		if ($shots == 0 && $Degrees_of_success >= 1){
			$j = $semi;
			if($semi >= ceil($Degrees_of_success/2)){
				 	$j = ceil($Degrees_of_success/2);	 	
			}
			if (isset($_POST['twin']) && $Degrees_of_success >= 2){
				$j = $j + 1;
			}

			for($k=1; $k<=$j; $k++){
				
				echo nl2br ("\n \n Hit number $k"); hit_location($roll, $k);
			damage($numberd10, $modd10, $crits, $CanCritAccurate, $primitive, $primitivet, $proven, $provent, $tearing, $halfdamage);
			}
		}






		// Full auto
		if ($shots == -10 && $Degrees_of_success >= 1){

			$j = $auto;
			 if($auto >= $Degrees_of_success){
			 	$j = $Degrees_of_success;
			 }
			 // if($auto < $Degrees_of_success){
			 // 	$j = $auto;
			 // }
			 if (isset($_POST['twin']) && $Degrees_of_success >= 2){
				$j = $j + 1;
			}

			if (isset($_POST['storm'])){
				$j = $j * 2;
			}

			for($k=1; $k<=$j; $k++){


				
				echo nl2br ("\n \n Hit number $k"); hit_location($roll, $k);
			damage($numberd10, $modd10, $crits, $CanCritAccurate, $primitive, $primitivet, $proven, $provent, $tearing, $halfdamage);
		}
		



		// echo nl2br ("\n\n\n Unmodified dice results in an array");
		// echo '<pre>'; print_r($total_test); echo '</pre>';

}	

?>
</div>