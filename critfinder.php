
<?php
	$damageType = $_POST['damageType'] ?? Energy;
	$testlocation = $_POST['testlocation'] ?? 1;
	$critTotal = $_POST['critTotal'] ?? 5;
	$variables = $_POST['variables'];
include 'resources/critical_effects.php';
?>

<form method="POST" action="critfinder.php">


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
</ul>







<div class = "menu">
		Head<input type="radio" name="testlocation" value="1" id="testlocation"<?php if($testlocation == "1") { echo 'checked="checked"';} ?>/>

		Body<input type="radio" name="testlocation" value="4" id="testlocation" <?php if($testlocation == "4") { echo 'checked="checked"';} ?>/>
		Arm<input type="radio" name="testlocation" value="2" id="testlocation" <?php if($testlocation == "2") { echo 'checked="checked"';} ?>/>
		Leg<input type="radio" name="testlocation" value="6" id="testlocation" <?php if($testlocation == "6") { echo 'checked="checked"';} ?>/>



		<div>
		Energy<input type="radio" name="damageType" value="Energy" id="damageType"<?php if($damageType == "Energy") { echo 'checked="checked"';} ?>/>

		Explosive<input type="radio" name="damageType" value="Explosive" id="damageType" <?php if($damageType == "Explosive") { echo 'checked="checked"';} ?>/>
		Impact<input type="radio" name="damageType" value="Impact" id="damageType" <?php if($damageType == "Impact") { echo 'checked="checked"';} ?>/>
		Rending<input type="radio" name="damageType" value="Rending" id="damageType" <?php if($damageType == "Rending") { echo 'checked="checked"';} ?>/>
		
		</div>	

		<label for="critTotal">Crit damage</label>
		<input type="text" id="critTotal" name="critTotal" value="<?=$critTotal?>"><br /><br />

		<!-- <label for="variables">Automaticly roll for variables?</label> -->
		<!-- <input type="checkbox" name="variables" value="variables" <?php if(isset($_POST['variables'])) echo "checked='checked'"; ?>  /><br /> -->

		
</div>	


	<div class = "button_location">
	<!-- button -->
	<button type="submit" class = "button">Critical</button>
	</div>


<div class = "output5">
<?php


if($_POST) {



  		first($critTotal, $testlocation, $damageType);   


}

?>
</div>