<?php

function somaComRestricao($valor1, $valor2) {
    $soma = $valor1 + $valor2;
    
    if ($soma < 0) {
        return 0;
    }
    
    return $soma;
}

// Exemplo de uso da função
$valor1 = 5;
$valor2 = -8;
$resultado = somaComRestricao($valor1, $valor2);
echo "O resultado da soma com restrição é: $resultado";
?>