<?php
    //Startwaarden
    $prijsAbonnement = 100;
    $teBetalen = $prijsAbonnement;

    //Bewerkingen
    $leeftijd = $_POST["leeftijd"];

    if ($leeftijd < 18)
    {
        $teBetalen = $prijsAbonnement * 0.5;
    }
    if($leeftijd > 67)
    {
        $teBetalen = $prijsAbonnement * 0.7;
    }
    else
    {
        $teBetalen = $prijsAbonnement;
    }
    
    echo $teBetalen;

    //jonger dan 18= 50% korting
    //Ouder dan 67= 30% korting
    //Rest betaald de standaard 
?>