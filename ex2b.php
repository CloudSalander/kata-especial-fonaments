<?php

$num = readline("Donam un nombre");
$num_aux = $num;
$suma_digits = 0;

while($num / 10 > 0) {
    $suma_digits += $num % 10;
    $num /= 10;
}

$suma_digits += $num % 10;

echo "Els digits de {$num_aux} sumen {$suma_digits}".PHP_EOL;

?>