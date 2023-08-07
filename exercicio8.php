<?php

function calcularIMC($peso, $altura) {
    $imc = $peso / ($altura * $altura);
    
    if ($imc < 18.5) {
        return "Magreza";
    } elseif ($imc >= 18.5 && $imc < 24.9) {
        return "Normal";
    } elseif ($imc >= 24.9 && $imc < 30) {
        return "Sobrepeso";
    } else {
        return "Obesidade";
    }
}

// uso da função
$peso = 70; // em kg
$altura = 1.75; // em metros
$categoria = calcularIMC($peso, $altura);
echo "O IMC da pessoa é: $categoria";
?>
