<?php

$vetor = array();

// Preencher com valores aleatórios entre 0 e 10
for ($i = 0; $i < 5; $i++) {
    $valor = rand(0, 10);
    $vetor[] = $valor;
}

// Encontrar o menor elemento e sua posição
$menorElemento = $vetor[0];
$posicaoMenorElemento = 0;

for ($i = 1; $i < 5; $i++) {
    if ($vetor[$i] < $menorElemento) {
        $menorElemento = $vetor[$i];
        $posicaoMenorElemento = $i;
    }
}

// Mostrar o menor elemento e sua posição
echo "Vetor: " . implode(", ", $vetor) . "<br>";
echo "Menor Elemento: " . $menorElemento . "<br>";
echo "Posição do Menor Elemento: " . $posicaoMenorElemento;

?>