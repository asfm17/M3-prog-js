<?php

$data = array();
$autos = ["Bugatti Chiron", "Dodge Demon", "Nissan Supra"];

print_r($autos);
echo  $autos [0]. "<br>";
echo $autos  [2] ."<br>";  
var_dump($data);
print_r($data);

$autos[] = "Dodge 1969";
echo count($autos);

print_r($autos);
sort($autos);
echo implode(' >> ', $autos);

?>