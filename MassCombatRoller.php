<?php
	$rolls = $_POST['rolls'] ?? 10;
	$mod = $_POST['mod'] ?? 3;
	$number = (int)$_POST['number'] ?? 20;

?>

<form method="POST" action="MassCombatRoller.php">

	<label for="rolls">Number of Attacks</label><br />
	<input type="text" id="rolls" name="rolls" value="<?=$rolls?>"><br /><br />
	<label for="dice">Mod</label><br />
	<input type="text" id="mod" name="mod" value="<?=$mod?>"><br /><br />
	<label for="number">Target AC</label><br />
	<input type="text" id="number" name="number" value="<?=$number?>"><br /><br />
	<button type="submit">Roll the dice!</button>
</form>

<?php
if($_POST) {
	$total_hits = 0;
	$total_1 = 0;
	$total_15 = 0;
	$total_16 = 0;
	$total_17 = 0;
	$total_18 = 0;
	$total_19 = 0;
	$total_20 = 0;
	//echo nl2br ("\n Modified results");
	$total_test = [];
	for($i=1; $i<=$rolls; $i++){
		$roll = mt_rand(1,20);
		//echo (" ");
		$x = $roll+$mod;
		//echo $x;
		if ($x>=$number){
		$total_hits++;
		}
		if ($roll===1){
		$total_1++;
		}
		if ($roll===15){
		$total_15++;
		}
		if ($roll===16){
		$total_16++;
		}
		if ($roll===17){
		$total_17++;
		}
		if ($roll===18){
		$total_18++;
		}
		if ($roll===19){
		$total_19++;
		}
		if ($roll===20){
		$total_20++;
		}
		@$total_test[$roll]++;
	}	
		echo nl2br ("\n Total hits = $total_hits");

		echo nl2br ("\n\n\n\n Total natural 20's = $total_20");
		echo nl2br ("\n\n Total natural 19's = $total_19");
		echo nl2br ("\n Total natural 18's = $total_18");
		echo nl2br ("\n Total natural 17's = $total_17");
		echo nl2br ("\n Total natural 16's = $total_16");
		echo nl2br ("\nTotal natural 15's = $total_15");
		echo nl2br ("\n\n Total natural 1's = $total_1");
		
		
		
		
		
		

		echo nl2br ("\n\n\n Unmodified dice results in an array");
		echo '<pre>'; print_r($total_test); echo '</pre>';

}	

?>