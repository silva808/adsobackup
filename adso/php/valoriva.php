<?php
$valor=readline("\ninserte valor producto: ");
$iva=readline("\ninserte iva: ");
$totaliva=$valor*($iva/100);

    echo "\n\nel valor del producto es: ",$valor;
    echo "\nel IVA es: ",$iva,'%';
    echo "\nel valor del IVA es: ",$totaliva;
    echo "\nel total es: ",$valor+$totaliva;
?>