<?php
	include 'resources/critical_effects.php';
	include 'resources/Hit_location.php';
	include 'resources/damage.php';
	$rolls = $_POST['rolls'] ?? 1;
	$mod = $_POST['mod'] ?? 0;

	$number = $_POST['number'] ?? 30;

	$numberd10 = $_POST['numberd10'] ?? 1;
	$modd10 = (int)$_POST['modd10'] ?? 0;
	$aim = $_POST['aim'] ?? 0;
	$twf = $_POST['twf'] ?? 0;
	$damageType = $_POST['damageType'] ?? Energy;
	$lasOverload = $_POST['lasOverload'] ?? 0;
	$range = $_POST['range'] ?? 0;
	$shootingM = $_POST['shootingM'];
	$troopt = $_POST['troopt'];
	$brace = $_POST['brace'];
	$shots = $_POST['shots'] ?? 10 ;
	$semi = $_POST['semi'] ?? 2;
	$auto = $_POST['auto'] ?? 4;

	$primitive = $_POST['primitive'] ?? 7;
	$proven = $_POST['proven'] ?? 3;
	$Vengefulvalue = $_POST['Vengefulvalue'] ?? 8;
	$Names = $_POST['Names'];
	$reddot = $_POST['reddot'];

	$CQD = $_POST['CQD'];
	$Unatural = $_POST['Unatural'] ?? 0;

	
?>








<head>
<link rel="stylesheet" type="text/css" href="resources/mystyle.css">
</head>



<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}

</style>



<ul>
  <li><a class="active" href="/?dir=Tools">Home</a></li>
  <li><a href="40k%20melee%20attack.php">Melee attack</a></li>
  <li><a href="40k%20attack%20roller.php">Ranged attack</a></li>
  <li><a href="40krpgroller.php">Generic roller</a></li>
    <li><a href="critfinder.php">Critfinder</a></li>
    <li><a href="http://testnetworkalpha.com/?dir=40rpg/Dark%20herecy%202nd%20edition">DH2 folder</a></li>
    <li><a><?php echo $Names ?></a></li>
</ul>













<form method="POST" action="40k attack roller.php">

	<!-- <label for="rolls">Roll</label><br />
	<input type="text" id="rolls" name="rolls" value="<?=$rolls?>"><br /><br /> -->

	<!-- BS -->
	<div class = "textbox">
		
		<label for="number">Ballistic skill</label><br />
		<input type="text" id="number" name="number" value="<?=$number?>"><br /><br />
		
		<!-- Other modifiers -->
		
		<label for="dice">Other Modifiers</label><br />
		<input type="text" id="mod" name="mod" value="<?=$mod?>"><br /><br />

			
		<!-- Damage -->
		
		<label for="nd10">Number of damage dice</label><br />
		<input type="text" id="numberd10" name="numberd10" value="<?=$numberd10?>"><br /><br />
		<label for="modd10">Damage dice modifier</label><br />
		<input type="text" id="modd10" name="modd10" value="<?=$modd10?>"><br /><br />
	
	</div>	



	<!-- Aim -->
	<div class="main_mods">
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

		
		<div>
		Energy<input type="radio" name="damageType" value="Energy" id="damageType"<?php if($damageType == "Energy") { echo 'checked="checked"';} ?>/>

		Explosive<input type="radio" name="damageType" value="Explosive" id="damageType" <?php if($damageType == "Explosive") { echo 'checked="checked"';} ?>/>
		Impact<input type="radio" name="damageType" value="Impact" id="damageType" <?php if($damageType == "Impact") { echo 'checked="checked"';} ?>/>
		Rending<input type="radio" name="damageType" value="Rending" id="damageType" <?php if($damageType == "Rending") { echo 'checked="checked"';} ?>/>
		
		</div>	
		<div>	
		Single Shot<input type="radio" name="shots" value="10" id="shots"  <?php if($shots == "10") { echo 'checked="checked"';} ?>/><br />

		Semi Burst<input type="radio" name="shots" value="0" id="shots" <?php if($shots == "0") { echo 'checked="checked"';} ?>/> 
		<input type="text" id="semi" name="semi" value="<?=$semi?>"><br />
		Full auto<input type="radio" name="shots" value="-10" id="shots" <?php if($shots == "-10") { echo 'checked="checked"';} ?>/>
		<input type="text" id="auto" name="auto" value="<?=$auto?>"><br /><br />
		</div>
		<div> Shooting into melee?
		<input type="checkbox" name="shootingM" value="-20" <?php if(isset($_POST['shootingM'])) echo "checked='checked'"; ?>  /><br />

		Is the target a troop?
		<input type="checkbox" name="troopt" value="-20" <?php if(isset($_POST['troopt'])) echo "checked='checked'"; ?>  /><br />

		Heavy weapon not braced?
		<input type="checkbox" name="brace" value="-30" <?php if(isset($_POST['brace'])) echo "checked='checked'"; ?>  /><br />
		<!-- Crits? -->
		No crits?
		<input type="checkbox" name="crits" value="2"  <?php if(isset($_POST['crits'])) echo "checked='checked'"; ?>  /><br />
		<div>
		Normal or master<input type="radio" name="twf" value="0" id="twf"<?php if($twf == "0") { echo 'checked="checked"';} ?>/>
		Two weapon fighting<input type="radio" name="twf" value="-20" id="twf" <?php if($twf == "-20") { echo 'checked="checked"';} ?>/>
		Ambidexturs<input type="radio" name="twf" value="-10" id="twf" <?php if($twf == "-10") { echo 'checked="checked"';} ?>/>
		
		

		</div>	
		</div>	
	</div>

	<!-- Special weapon abilities -->

	<div class="Modifiers">
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

	<label for="Vengeful">Vengeful</label>
	<input type="checkbox" name="Vengeful" value="20" <?php if(isset($_POST['Vengeful'])) echo "checked='checked'"; ?>  />
	<input type="text" id="Vengefulvalue" name="Vengefulvalue" value="<?=$Vengefulvalue?>"><br />

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
	



			<!-- Las variable setting -->
	<div>
	Non Las Or Not Overcharing<input type="radio" name="lasOverload" value="0" id="lasOverload"  <?php if($lasOverload == "0") { echo 'checked="checked"';} ?>/>
	High Power<input type="radio" name="lasOverload" value="1" id="lasOverload" <?php if($lasOverload == "1") { echo 'checked="checked"';} ?>/>
	Overload<input type="radio" name="lasOverload" value="2" id="lasOverload" <?php if($lasOverload == "2") { echo 'checked="checked"';} ?>/>
	<label for="Names">Name of character</label>
	<input type="text" id="Names" name="Names" value="<?=$Names?>"><br /><br />
	</div>	
	</div>

	<div class = "other">
	
		<label for="reddot">Red dot sight</label>
		<input type="checkbox" name="reddot" value="true" <?php if(isset($_POST['reddot'])) echo "checked='checked'"; ?>  />
		
		
		<label for="CQD">Close Quarters Discipline</label>
		<input type="checkbox" name="CQD" value="true" <?php if(isset($_POST['CQD'])) echo "checked='checked'"; ?>  />

		<label for="Unatural">Unatural Ballistic skill</label><br />
		<input type="text" id="Unatural" name="Unatural" value="<?=$Unatural?>"><br /><br />
		
	</div>
	


	<div class = "button_location">
	<!-- button -->
	<button type="submit" class = "button">Roll the dice!</button>
	</div>




</form>

<div class = "output_green">
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
	
	//echo nl2br ("\n Modified results");
	// $total_test = [];
	for($i=1; $i<=$rolls; $i++){
		$roll = random_int(1,100);
		//echo (" ");
		

		if($aim > 0 && isset($_POST['Accurate'])){
  		   $a = 10;
		}
		if($range > 0 && isset($_POST['scatter'])){
  		   $scatterm = 10;
		}
		if(isset($_POST['twin'])){
  		   $twin = 20;
		}
		if(isset($_POST['reddot']) && $shots == 10){
  		   $red = 10;
		}
		
		$x = $number+$mod+$aim+$range+$shootingM+$shots+$a+$brace+$twin+$scatterm+$red+$twf;
		//echo $x;
		
		//echo nl2br ("\n Target = $x Roll = $roll");
		
		if ($roll<=$x){
			$total_hits++;
			$Degrees_of_success	 = (floor($x/10) - floor($roll/10))+1;
			//echo nl2br (" Degrees of success = $Degrees_of_success\n\n");
			echo nl2br ("\n The target was $x The roll was $roll which gave $Degrees_of_success degrees of success\n\n");

			if(isset($_POST['CQD']) && $range > 1){
				$Degrees_of_success = $Degrees_of_success +1;
				echo nl2br ("+1 degree of success from Close Combat Discipline for a total of $Degrees_of_success\n\n");	
			}

			// if($Unatural >= 1){
			// 	$test333 = celi($Unatural/2);
			// 	$Degrees_of_success = $Degrees_of_success + $Unatural;
			// 	echo nl2br ("Plus half $Unatural to Degrees of success for a total of $Degrees_of_success\n\n");
			// }
		
		}

		else{
			$Degrees_of_failure = (floor($x/10) - floor($roll/10))-1;	
	//	echo nl2br (" Degrees of failure = $Degrees_of_failure\n\n");
			echo nl2br ("\n The target was $x The roll was $roll which gave $Degrees_of_failure degrees of failure\n\n");
			
		}


		if ($roll >= $jam){
			if (isset($_POST['overheats'])){
				echo nl2br ("\n Weapon has Overheated!");
			}
			else{
			echo nl2br ("\n Weapon has jammed!");
			}
		}
		// @$total_test[$roll]++;
	}	

	//Damage function
	function damage($numberd10, $modd10, $crits, $CanCritAccurate, $primitive, $primitivet, $proven, $provent, $tearing, $halfdamage, $testlocation, $troop, $damageType, $Vengeful, $Vengefulvalue){
		
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

			
			if (isset($_POST['Vengeful']) && $rolld10 >= $Vengefulvalue){
				
				$RF = 10;
			}



			if($rolld10 >= 10){
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
		if ($lasOverload == 1){
			$modd10 = $modd10 + 1;
		}
		if ($lasOverload == 2){
			$modd10 = $modd10 + 2;
		}
		if (isset($_POST['troopt'])){
			$troop = 10;
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

		echo "The shot  "; $testlocation = hit_location($roll, $k);
		hit_location_echo($testlocation);
		damage($numberd10, $modd10, $crits, $CanCritAccurate, $primitive, $primitivet, $proven, $provent, $tearing, $halfdamage, $testlocation, $troop, $damageType, $Vengeful, $Vengefulvalue);
		echo "\n __________________________________________________"; 

		if (isset($_POST['twin']) && $Degrees_of_success >= 2){
			echo nl2br ("\n \nThe second shot  ");
			$testlocation = hit_location($roll, $k);
			hit_location_echo($testlocation);
			damage($numberd10, $modd10, $crits, $CanCritAccurate, $primitive, $primitivet, $proven, $provent, $tearing, $testlocation, $troop, $damageType, $Vengeful, $Vengefulvalue);
			echo "\n __________________________________________________"; 
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
				
				echo nl2br ("\n \n Hit number $k"); $testlocation = hit_location($roll, $k); hit_location_echo($testlocation);
			damage($numberd10, $modd10, $crits, $CanCritAccurate, $primitive, $primitivet, $proven, $provent, $tearing, $halfdamage, $testlocation, $troop, $damageType, $Vengeful, $Vengefulvalue);
			echo "\n __________________________________________________";
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

				echo nl2br ("\n \n Hit number $k"); $testlocation = hit_location($roll, $k); hit_location_echo($testlocation);
			damage($numberd10, $modd10, $crits, $CanCritAccurate, $primitive, $primitivet, $proven, $provent, $tearing, $halfdamage, $testlocation, $troop, $damageType, $Vengeful, $Vengefulvalue );
			echo "\n __________________________________________________";
		}
}	
?>
</div>