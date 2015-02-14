<?php
//Player One Variables
$player1Rolls = 0;
$player1Adverage =0;
$player1Kills = 0;
//PlayerTwo Variables
$player2Rolls = 0;
$player2Adverage =0;
//Summery Variables 
$totalRolls = 0;
$errorRolls = 0;

function errorMessage(){
	echo "Use a real number and stop trying to break things"; 
};

function generateDice($minRoll, $diceType, $diceAmount ,$killingBlow ,$player){
    if($diceAmount >= 0){
    	for($i = 1; $i <= $diceAmount; $i++){
    		$diceNumber = rand($minRoll, $diceType);
    		echo "<img src=\"images\D".$diceType."_".$diceNumber.".png\" 
    		alt=\"You Rolled a ".$diceNumber."\" width=\"46\" 
    		height=\"46\" title=\"".$player." Rolled a ".$diceNumber."\"/>";
    		
            if($player == "P1"){
                $GLOBALS['player1Rolls']++;
                $GLOBALS['player1Adverage'] =  $GLOBALS['player1Adverage'] + $diceNumber;
                if($diceNumber >=$killingBlow) {$GLOBALS['player1Kills']++;}
            } else if ($player == "P2"){
                $GLOBALS['player2Rolls']++;
                $GLOBALS['player2Adverage'] =  $GLOBALS['player2Adverage'] + $diceNumber;
            } else {
                $GLOBALS['errorRolls']++;
            }
            }
    	} else {
    		echo "<img src=\"images\SadCat.jpeg\" 
    		alt=\"You Made It Sad\" width=\"100\" 
    		height=\"100\" title=\"You Bad Person\"/>";
            echo "<br>";
    		errorMessage();
    	}
};

function gettoConsole(){
    echo "<br> Error Rolls : ".$GLOBALS['errorRolls'];
    echo "<br> Player 1 Rolls : ".$GLOBALS['player1Rolls'];
    echo "<br> Player 1 Adverage : ".number_format($GLOBALS['player1Adverage'] = $GLOBALS['player1Adverage'] / $GLOBALS['player1Rolls'], 2, '.', '');
    echo "<br> Player 1 Kills : ".$GLOBALS['player1Kills'].'   %'.number_format(($GLOBALS['player1Kills'] /$GLOBALS['player1Rolls']) * 100, 2, '.', '');
    echo "<br> Player 2 Rolls : ".$GLOBALS['player2Rolls'];
    echo "<br> Player 2 Adverage :".$GLOBALS['player2Adverage']; //= $GLOBALS['player2Adverage'] / $GLOBALS['player2Rolls'];
}


?>