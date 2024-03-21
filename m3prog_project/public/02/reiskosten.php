<?php

$afstand = 1025.33;
$literPrijs = 1.89;
$treinKosten = 60;
$tankInhoud = 50;
$kmPerLiter = 15;

$literVerbruik = $afstand / $kmPerLiter;
$aantalkerenTanken = $literVerbruik / $tankInhoud;
$autoKosten = ($aantalkerenTanken * $tankInhoud) * $literPrijs;

if ($autoKosten > $treinKosten) {
    echo"Ik ga met de trein! Want:";
}

else {
    echo"Ik ga met de auto! Want:";
}


echo (" afstand is:" .$afstand); 

echo "<br>";

echo (" De totale prijs is:" .$autoKosten);

echo "<br>";

echo (" Het literverbruik is:" .$literVerbruik); 

echo "<br>";

echo (" Het aantal keren dat je moet tanken is :" .$aantalkerenTanken);

?>

