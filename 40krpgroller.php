<?php
	$rolls = $_POST['rolls'] ?? 1;
	$mod = $_POST['mod'] ?? 0;
	$number = $_POST['number'] ?? 30;

	$numberd10 = $_POST['numberd10'] ?? 0;
	$modd10 = (int)$_POST['modd10'] ?? 0;
	$difficulties = $_POST['difficulties'] ?? 0;
	$skills = $_POST['skills'] ?? 0;
	$Names = $_POST['Names'];
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








<form method="POST" action="40krpgroller.php">

	<!-- <label for="rolls">Roll</label><br />
	<input type="text" id="rolls" name="rolls" value="<?=$rolls?>"><br /><br /> -->
	<div class ="textbox">
	<label for="number">Attribute Value</label><br />
	<input type="text" id="number" name="number" value="<?=$number?>"><br /><br />
	<div >
		Skill Level
	</div>
	
	<div >

	
		Unskilled<input type="radio" name="skills" value="-20" id="skills"<?php if($skills == "-20") { echo 'checked="checked"';} ?>/>

		Known<input type="radio" name="skills" value="0" id="skills" <?php if($skills == "0") { echo 'checked="checked"';} ?>/>
		+10<input type="radio" name="skills" value="10" id="skills" <?php if($skills == "10") { echo 'checked="checked"';} ?>/>
		+20<input type="radio" name="skills" value="20" id="skills" <?php if($skills == "20") { echo 'checked="checked"';} ?>/>
		+30<input type="radio" name="skills" value="30" id="skills" <?php if($skills == "30") { echo 'checked="checked"';} ?>/>

	</div>	
	<div >
		Test Difficulties
	</div>
		
	<div>
		
		+60<input type="radio" name="difficulties" value="60" id="difficulties"<?php if($difficulties == "60") { echo 'checked="checked"';} ?>/>
		+50<input type="radio" name="difficulties" value="50" id="difficulties" <?php if($difficulties == "50") { echo 'checked="checked"';} ?>/>
		+40<input type="radio" name="difficulties" value="40" id="difficulties" <?php if($difficulties == "40") { echo 'checked="checked"';} ?>/>
		+30<input type="radio" name="difficulties" value="30" id="difficulties" <?php if($difficulties == "30") { echo 'checked="checked"';} ?>/>
		+20<input type="radio" name="difficulties" value="20" id="difficulties" <?php if($difficulties == "20") { echo 'checked="checked"';} ?>/>
		+10<input type="radio" name="difficulties" value="10" id="difficulties" <?php if($difficulties == "10") { echo 'checked="checked"';} ?>/>
		+0<input type="radio" name="difficulties" value="0" id="difficulties" <?php if($difficulties == "-0") { echo 'checked="checked"';} ?>/>
		-10<input type="radio" name="difficulties" value="-10" id="difficulties" <?php if($difficulties == "-10") { echo 'checked="checked"';} ?>/>
		-20<input type="radio" name="difficulties" value="-20" id="difficulties" <?php if($difficulties == "-20") { echo 'checked="checked"';} ?>/>
		-30<input type="radio" name="difficulties" value="-30" id="difficulties" <?php if($difficulties == "-30") { echo 'checked="checked"';} ?>/>
		-40<input type="radio" name="difficulties" value="-40" id="difficulties" <?php if($difficulties == "-40") { echo 'checked="checked"';} ?>/>
		-50<input type="radio" name="difficulties" value="-50" id="difficulties" <?php if($difficulties == "-50") { echo 'checked="checked"';} ?>/>
		-60<input type="radio" name="difficulties" value="-60" id="difficulties" <?php if($difficulties == "-60") { echo 'checked="checked"';} ?>/>
		

	</div>	






	<label for="dice">Other Modifiers</label><br />
	<input type="text" id="mod" name="mod" value="<?=$mod?>"><br /><br />
	</div>

	<div class = "name">
	<label for="Names">Name of character</label>
	<input type="text" id="Names" name="Names" value="<?=$Names?>"><br /><br />
	</div>

 <!-- 	


	<label for="nd10">Number of damage dice</label><br />
	<input type="text" id="numberd10" name="numberd10" value="<?=$numberd10?>"><br /><br />
	<label for="modd10">Damage dice modifier</label><br />
	<input type="text" id="modd10" name="modd10" value="<?=$modd10?>"><br /><br /> -->
	
	<div class = "button_blue_location ">
	<!-- button -->
	<button type="submit" class = "button3">Roll the dice!</button>
	</div>

	

	

</form>
<div class = "output_blue">
<?php
if($_POST) {

	$total_hits = 0;
	$Degrees_of_success = 0;
	$Degrees_of_failure = 0;
	//echo nl2br ("\n Modified results");
	// $total_test = [];
	for($i=1; $i<=$rolls; $i++){
		$roll = mt_rand(1,100);
		//echo (" ");
		$x = $number+$mod+$difficulties;
		//echo $x;
		
		// echo nl2br ("\n Target = $x");
		// echo nl2br ("\n Roll = $roll");
		if ($roll<=$x){
		$total_hits++;
		$Degrees_of_success	 = (floor($x/10) - floor($roll/10))+1;
		echo nl2br ("\n The target was $x The roll was $roll which gave $Degrees_of_success degrees of success\n\n");




		if (isset($_POST['txtCheck'])) {
			$rev = strrev($roll);
			echo $rev;
			if ( in_array($rev, range(1,10)) ) {
    				echo ' Was a head Shot';
				}
			if ( in_array($rev, range(11,20)) ) {
    				echo ' Hit the right arm';
				}
			if ( in_array($rev, range(21,30)) ) {
    				echo ' Hit the left arm';
				}
			if ( in_array($rev, range(31,70)) ) {
    				echo ' Hit the body';
				}
			if ( in_array($rev, range(71,85)) ) {
    				echo ' Hit the right leg';
				}
			if ( in_array($rev, range(86,100)) ) {
    				echo ' Hit the left leg';
				}		


		}




		}

		
		else{
			$Degrees_of_failure = (floor($x/10) - floor($roll/10))-1;	
			
			echo nl2br ("\n The target was $x The roll was $roll which gave $Degrees_of_failure degrees of failure\n\n");


			//echo nl2br ("\n DOF = $Degrees_of_failure\n\n");	
		}

		if ($roll == 100){
			echo nl2br ("\n The roll was a critical failure");
		}
		if ($roll == 1){
			echo nl2br ("\n The roll was a critical success");
		}

		// @$total_test[$roll]++;
	}	
		

	if (isset($_POST['txtCheck'])) {


		$damage_total = 0;
		for($j=1; $j<=$numberd10; $j++){
			$rolld10 = mt_rand(1,10);
			$damage_total = $rolld10 + $damage_total;

			if($rolld10 == 10){

				echo nl2br ("\n $j Damage = $rolld10 is a crit");	
			}
			else {
				echo nl2br ("\n $j Damage = $rolld10");
			}

			
		}
			$damage_total = $damage_total + $modd10;
		echo nl2br ("\n Damage Total = $damage_total");
		
		
		}
		

		// echo nl2br ("\n\n\n Unmodified dice results in an array");
		// echo '<pre>'; print_r($total_test); echo '</pre>';

}	

?>
</div>