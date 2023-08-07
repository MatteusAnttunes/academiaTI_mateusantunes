<?php

function alunoAprovado($n1, $n2) {
    $somaNotas = $n1 + $n2;
    
    if ($somaNotas >= 19 && $n1 > 7 && $n2 > 7) {
        return true;
    } else {
        return false;
    }
}

// Exemplo de uso da função
$nota1 = 8;
$nota2 = 9;
$resultado = alunoAprovado($nota1, $nota2);

if ($resultado) {
    echo "O aluno foi aprovado!";
} else {
    echo "O aluno não foi aprovado.";
}
?>
