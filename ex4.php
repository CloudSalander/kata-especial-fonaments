<?php
//TODO: SEGURO QUE PUEDE HACER EN UN LOOP SOLO :)
$alçada = readline("Siusplau, entra alçada de la piràmide");

function printLine(int $longitud): void {
    $con = 0;
    while($con < $longitud) {
        echo "#";
        ++$con;
    }
    echo PHP_EOL;
}

$con_filas = 1;

while($con_filas <= $alçada) {
    printLine($con_filas);
    ++$con_filas;
}

$con_filas = $alçada-1;

while($con_filas > 0) {
    printLine($con_filas);
    --$con_filas;
}

?>