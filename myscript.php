<?php
    //Startwaarden
    $prijsAltijd = 100;
    $prijsOverdag = 75;
    $prijsWeekend = 50; 

    //Bewerkingen
    $abbo = $_POST["soort"];
    $leeftijd = $_POST["leeftijd"];
    
    $teBetalen = $prijsAltijd;

    if($abbo == "weekend"){
        $teBetalen = $prijsWeekend;
    }

    if($abbo == "overdag"){
        $teBetalen = $prijsOverdag;
    }

    if($abbo == "altijd" || $abbo == "overdag" ){
        if ($leeftijd < 18){
            $teBetalen = $teBetalen * 0.5;
        }
        if ($leeftijd > 67){
            $teBetalen = $teBetalen * 0.7;
        }
    }
    
    echo $teBetalen;


    // Altijd = 100 wel korting
    // Weekend = 50 geen korting
    // Overdag = 75 wel korting

    // Jonger dan 18= 50% korting
    // Ouder dan 67= 30% korting
    // Rest betaald de standaard 
?>