<?php

include 'functions.php';
$p1Name = "Player One";
$p2Name = "Player Two";

$rollToKill = 6;
$footsoldierP1 = (empty($_POST['footsoldierP1'])) ? 0 : $_POST['footsoldierP1'];
$seigeEngineP1 = (empty($_POST['seigeEngineP1'])) ? 0 : $_POST['seigeEngineP1'];
$fighterP1 = (empty($_POST['fighterP1'])) ? 0 : $_POST['fighterP1'];
$wizardP1 = (empty($_POST['wizardP1'])) ? 0 : $_POST['wizardP1'];
$monsterP1 = (empty($_POST['monsterP1'])) ? 0 : $_POST['monsterP1'];
$castleP1 = (empty($_POST['castleP1'])) ? 0 : $_POST['castleP1'];
$stormElementelP1 = (empty($_POST['stormElementelP1'])) ? 0 : $_POST['stormElementelP1'];
$dragonP1 = (empty($_POST['dragonP1'])) ? 0 : $_POST['dragonP1'];
$warshipP1 = (empty($_POST['warshipP1'])) ? 0 : $_POST['warshipP1'];

$footsoldierP2 = (empty($_POST['footsoldierP2'])) ? 0 : $_POST['footsoldierP2'];
$seigeEngineP2 = (empty($_POST['seigeEngineP2'])) ? 0 : $_POST['seigeEngineP2'];
$fighterP2 = (empty($_POST['fighterP2'])) ? 0 : $_POST['fighterP2'];
$wizardP2 = (empty($_POST['wizardP2'])) ? 0 : $_POST['wizardP2'];
$monsterP2 = (empty($_POST['monsterP2'])) ? 0 : $_POST['monsterP2'];
$castleP2 = (empty($_POST['castleP2'])) ? 0 : $_POST['castleP2'];
$stormElementelP2 = (empty($_POST['stormElementelP2'])) ? 0 : $_POST['stormElementelP2'];
$dragonP2 = (empty($_POST['dragonP2'])) ? 0 : $_POST['dragonP2'];
$warshipP2 = (empty($_POST['warshipP2'])) ? 0 : $_POST['warshipP2'];


?>

<html>
	<head>
		<title> Dungeons & Dragons: Conquest of Nerath - Dice Roller </title>
    	<link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
	</head>

	<body>
		<div class="container_12">
    		<div id="header" class="grid_12">
        		<h1>Dungeons & Dragons: Conquest of Nerath <br> Dice Roller </h1>
        	</div>
        	<div id="feature" class="grid_12">
    	   		<p> Feature </p>
        	</div>

            <!-- PLAYER ONE Form / Profile -->
            <div class="playerOneProf grid_6">
    	       <div class="displayPicture">
    	       		<img src= "images\SadCat.jpeg" height="75" width="75"/> 
    	       			<h1 style="display: inline;"> Player One </h1>
    	       	</div>
    	       <div class="list_container">
                    <div class="left_left grid_3">
                        <form action="index.php" method ="POST">
                            <input type="number" style="width: 45px;" name="footsoldierP1" value="<?php echo $footsoldierP1; ?>">   Footsoldier<br>
                            <input type="number" style="width: 45px;" name="seigeEngineP1" value="<?php echo $seigeEngineP1; ?>" checked>   Seige Engine<br>
                            <input type="number" style="width: 45px;" name="fighterP1" value="<?php echo $fighterP1; ?>" checked>   Fighter<br>
                            <input type="number" style="width: 45px;" name="wizardP1" value="<?php echo $wizardP1; ?>" checked>   Wizard<br>
                            <input type="number" style="width: 45px;" name="monsterP1" value="<?php echo $monsterP1; ?>" checked>   Monster<br>
                        
                    </div>
                    <div class="list_right grid_2">
                        <form>
                            <input type="number" style="width: 45px;" name="castleP1" value="<?php echo $castleP1; ?>" checked>   Castle<br>
                            <input type="number" style="width: 45px;" name="stormElementelP1" value="<?php echo $stormElementelP1; ?>" checked>   Elementel<br>
                            <input type="number" style="width: 45px;" name="dragonP1" value="<?php echo $dragonP1; ?>"checked>   Dragon<br>
                            <input type="number" style="width: 45px;" name="warshipP1" value="<?php echo $warshipP1; ?>" checked>   Warship<br>
                        
                    </div>
                </div>
            </div>
 
            <!-- PLAYER TWO Form / Profile -->
            <div class="playerTwoProf grid_6">
    	       <div class="displayPicture">
    	       		<img src= "images\SadCat.jpeg" height="75" width="75"/> 
                        <h1 style="display: inline;"> Player Two </h1>
    	       	</div>
                <div class="list_container">
                    <div class="left_left grid_3">
<form action="index.php" method ="POST">
                            <input type="number" style="width: 45px;" name="footsoldierP2" value="<?php echo $footsoldierP2; ?>">   Footsoldier<br>
                            <input type="number" style="width: 45px;" name="seigeEngineP2" value="<?php echo $seigeEngineP2; ?>" checked>   Seige Engine<br>
                            <input type="number" style="width: 45px;" name="fighterP2" value="<?php echo $fighterP2; ?>" checked>   Fighter<br>
                            <input type="number" style="width: 45px;" name="wizardP2" value="<?php echo $wizardP2; ?>" checked>   Wizard<br>
                            <input type="number" style="width: 45px;" name="monsterP2" value="<?php echo $monsterP2; ?>" checked>   Monster<br>
                       
                    </div>
                    <div class="list_right grid_2">
                        <form>
                            <input type="number" style="width: 45px;" name="castleP2" value="<?php echo $castleP2; ?>" checked>   Castle<br>
                            <input type="number" style="width: 45px;" name="stormElementelP2" value="<?php echo $stormElementelP2; ?>" checked>   Elementel<br>
                            <input type="number" style="width: 45px;" name="dragonP2" value="<?php echo $dragonP2; ?>"checked>   Dragon<br>
                            <input type="number" style="width: 45px;" name="warshipP2" value="<?php echo $warshipP2; ?>" checked>   Warship<br>
                        
                    </div>
                </div>
            </div>

            <!-- PLAYER ONE Dice Display -->
            <div class="playerOneDice grid_5">
    	       <p> Player One Dice Area </p>
                <!-- Player One FOOT SOLDIER Dice Container  -->
                <div class="diceDisplay" <?php if ($footsoldierP1 < 0){ echo 'style="display:none;"'; }?>> 
                <?php generateDice(1,6,$footsoldierP1,$rollToKill,"P1");?> </div>
                <!-- Player One SEIGE ENGINE Dice Container  -->
                <div class="diceDisplay" <?php if ($seigeEngineP1 < 0){ echo 'style="display:none;"'; }?>> 
                <?php generateDice(1,8,$seigeEngineP1,$rollToKill,"P1");?> </div>
                <!-- Player One FIGHTER Dice Container  -->
                <div class="diceDisplay" <?php if ($fighterP1 < 0){ echo 'style="display:none;"'; }?>> 
                <?php generateDice(1,10,$fighterP1,$rollToKill,"P1");?> </div>   
                <!-- Player One WIZARD Dice Container  -->
                <div class="diceDisplay" <?php if ($wizardP1 < 0){ echo 'style="display:none;"'; }?>> 
                <?php generateDice(1,10,$wizardP1,$rollToKill,"P1");?> </div>    
                <!-- Player One MONSTER Dice Container  -->
                <div class="diceDisplay" <?php if ($monsterP1 < 0){ echo 'style="display:none;"'; }?>> 
                <?php generateDice(1,12,$monsterP1,$rollToKill,"P1");?> </div> 
                <!-- Player One CASTLE Dice Container  -->
                <div class="diceDisplay" <?php if ($castleP1 < 0){ echo 'style="display:none;"'; }?>> 
                <?php generateDice(1,20,$castleP1,$rollToKill,"P1");?> </div> 
                <!-- Player One ELEMENTEL Dice Container  -->
                <div class="diceDisplay" <?php if ($stormElementelP1 < 0){ echo 'style="display:none;"'; }?>> 
                <?php generateDice(1,8,$stormElementelP1,$rollToKill,"P1");?> </div> 
                <!-- Player One DRAGON Dice Container  -->
                <div class="diceDisplay" <?php if ($dragonP1 < 0){ echo 'style="display:none;"'; }?>> 
                <?php generateDice(1,20,$dragonP1,$rollToKill,"P1");?> </div> 
                <!-- Player One WARSHIP Dice Container  -->
                <div class="diceDisplay" <?php if ($warshipP1 < 0){ echo 'style="display:none;"'; }?>> 
                <?php generateDice(1,8,$warshipP1,$rollToKill,"P1");?> </div>           
            </div>

            <!-- Test Display -->
            <div class="rollInfo grid_2">
    	       <p> Roll area <br>
                <form action="index.php" method="POST">
                <input type="submit" value="Submit">
                <?php gettoConsole(); ?> </p>
            
            </div>

            <!-- PLAYER TWO Dice Display -->
            <div class="playerTwoDice grid_5">
               <p> Player Two Dice Area </p>
                <!-- Player Two FOOT SOLDIER Dice Container  -->
                <div class="diceDisplay" <?php if ($footsoldierP2 < 0){ echo 'style="display:none;"'; }?>> 
                <?php generateDice(1,6,$footsoldierP2,$rollToKill,"P2");?> </div>
                <!-- Player Two SEIGE ENGINE Dice Container  -->
                <div class="diceDisplay" <?php if ($seigeEngineP2 < 0){ echo 'style="display:none;"'; }?>> 
                <?php generateDice(1,8,$seigeEngineP2,$rollToKill,"P2");?> </div>
                <!-- Player Two FIGHTER Dice Container  -->
                <div class="diceDisplay" <?php if ($fighterP2 < 0){ echo 'style="display:none;"'; }?>> 
                <?php generateDice(1,10,$fighterP2,$rollToKill,"P2");?> </div>   
                <!-- Player Two WIZARD Dice Container  -->
                <div class="diceDisplay" <?php if ($wizardP2 < 0){ echo 'style="display:none;"'; }?>> 
                <?php generateDice(1,10,$wizardP2,$rollToKill,"P2");?> </div>    
                <!-- Player Two MONSTER Dice Container  -->
                <div class="diceDisplay" <?php if ($monsterP2 < 0){ echo 'style="display:none;"'; }?>> 
                <?php generateDice(1,12,$monsterP2,$rollToKill,"P2");?> </div> 
                <!-- Player Two CASTLE Dice Container  -->
                <div class="diceDisplay" <?php if ($castleP2 < 0){ echo 'style="display:none;"'; }?>> 
                <?php generateDice(1,20,$castleP2,$rollToKill,"P2");?> </div> 
                <!-- Player Two ELEMENTEL Dice Container  -->
                <div class="diceDisplay" <?php if ($stormElementelP2 < 0){ echo 'style="display:none;"'; }?>> 
                <?php generateDice(1,8,$stormElementelP2,$rollToKill,"P2");?> </div> 
                <!-- Player Two DRAGON Dice Container  -->
                <div class="diceDisplay" <?php if ($dragonP2 < 0){ echo 'style="display:none;"'; }?>> 
                <?php generateDice(1,20,$dragonP2,$rollToKill,"P2");?> </div> 
                <!-- Player Two WARSHIP Dice Container  -->
                <div class="diceDisplay" <?php if ($warshipP2 < 0){ echo 'style="display:none;"'; }?>> 
                <?php generateDice(1,8,$warshipP2,$rollToKill,"P2");?> </div> 
            </div>

        </div>
        </div2
	</body>

</html>