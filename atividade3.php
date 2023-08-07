<?php

$preco = 320

$taxa = $preco * 0.12; //calculo de 12% do valor

$total_com_acrescimo = $preco + $taxa; // calcilo total com acrescimo 

$parcelas = 10;

$valor_por_parcela = $total_com_acrescimo / $parcelas; // calculo do valor das parcelas 

echo "Valor de cada parcela: " . number_format($valor_por_parcela, 2) . "∖n";
echo "Valor total da compra: " . number_format($total_com_acrescimo, 2); 
?>