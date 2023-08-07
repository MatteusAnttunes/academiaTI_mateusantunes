<?php

function calcularSalarioReajustado($salario) {
    if ($salario <= 3000) {
        $reajuste = 0.50;
    } else {
        $reajuste = 0.30;
    }

    $novoSalario = $salario * (1 + $reajuste);
    
    return $novoSalario;
}

// Exemplo de uso da função
$salarioAntigo = 2500;
$novoSalario = calcularSalarioReajustado($salarioAntigo);
echo "O salário reajustado é: R$ " . number_format($novoSalario, 2, ',', '.');
?>
