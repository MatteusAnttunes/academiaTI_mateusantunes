<?php
$numMes = 8;

if ($numMes >= 1 && $numMes <= 12) {
    $meses = array(
        1 => "Janeiro",
        2 => "Fevereiro",
        3 => "Março",
        4 => "Abril",
        5 => "Maio",
        6 => "Junho",
        7 => "Julho",
        8 => "Agosto",
        9 => "Setembro",
        10 => "Outubro",
        11 => "Novembro",
        12 => "Dezembro"
    );

    echo "O mês correspondente ao número $numMes é: " . $meses[$numMes];
} else {
    echo "Mês inválido";
}
