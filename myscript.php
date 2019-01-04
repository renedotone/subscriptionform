<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <script src=""></script>
</head>
<body>
    <div class="content"> 
        <?php
            //Startwaarden
            $prijsAltijd = 100;
            $prijsOverdag = 75;
            $prijsWeekend = 50; 

            //Bewerkingen
            $abbo = $_POST["soort"];
            $leeftijd = $_POST["leeftijd"];
            $voornaam = $_POST["voornaam"];
            $achternaam = $_POST["achternaam"];
            $woonplaats = $_POST["woonplaats"];
            
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
            
            if(($abbo == "altijd" || $abbo == "overdag" || $abbo == "weekend") && $leeftijd > 11){
                echo "De prijs per maand is € $teBetalen.";
            }

            if(($abbo == "altijd" || $abbo == "overdag" || $abbo == "weekend") && $leeftijd < 12){
                print("De minimumleeftijd is 12 jaar, u kunt geen lid worden.");
            }

            if($abbo == "geenkeuze"){
                print("U heeft geen abonnement gekozen.");
            }


            // Altijd = 100 wel korting
            // Weekend = 50 geen korting
            // Overdag = 75 wel korting
            // Minimum leeftijd = 12

            // Jonger dan 18= 50% korting
            // Ouder dan 67= 30% korting
            // Rest betaald de standaard 
        ?>
    </div> 
</body>
</html>