<?php
// Criando os dois vetores
$vetor1 = array();
$vetor2 = array();

// Preenchendo os vetores com valores aleatórios
for ($i = 0; $i < 10; $i++) {
    $vetor1[$i] = rand(1, 100); // Substitua os valores máximos e mínimos conforme necessário
    $vetor2[$i] = rand(1, 100);
}

// Criando o terceiro vetor para armazenar a soma
$resultado = array();

// Calculando a soma dos elementos de mesmo índice
for ($i = 0; $i < 10; $i++) {
    $resultado[$i] = $vetor1[$i] + $vetor2[$i];
}

// Imprimindo os três vetores
echo "Vetor 1: ";
print_r($vetor1);

echo "Vetor 2: ";
print_r($vetor2);

echo "Resultado: ";
print_r($resultado);
?>
