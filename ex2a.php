<?php

$pes = readline("Introduexis el pes(en kg)");
$alçada = readline("Introdueix alçada(en metres)");

$IMC = $pes / ($alçada**2);
$rang = "";

if($IMC < 18.5) $rang =  "Sota el pes normal";
else if($IMC  <= 24.9) $rang =  "Normal";
else if($IMC  <= 29.9) $rang =  "Sobrepès";
else $rang =  "Obesitat";

echo "El teu IMC és: {$IMC} ($rang)".PHP_EOL;
?>