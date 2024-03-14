<?php


$fahrenheit = 74;
$celsius = ($fahrenheit - 32) / 1.8;
echo "{$fahrenheit} graden Fahrenheit = {$celsius} graden Celsius. <br/>";

$celsius = 32;
$fahrenheit = ($celsius * 1.8);
echo "{$celsius} graden Celsius = {$fahrenheit} graden Fahrenheit. <br/>";

$celsius = 30;
$kelvin = ($celsius + 273.15);
echo "{$celsius} graden Celsius = {$kelvin} graden Kelvin. <br/>";

$fahrenheit = 82;
$kelvin = ($fahrenheit - 32) * 5 / 9 + 273.15;
echo "{$fahrenheit} graden Fahrenheit = {$kelvin} graden Kelvin <br/>";

?>