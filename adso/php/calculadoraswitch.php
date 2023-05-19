// <!-- any suggestion is well received -->
<?php
a: echo"Calculadora\n";
$opcion=0;
$num1f= $num2f =$sumaf =$restaf =$multif =$divif =0;

function suma($num1, $num2, $suma)
{
    $suma=$num1+$num2;
    echo "\nla suma de $num1 y $num2 es igual a $suma\n\n";
}
function resta($num1, $num2, $resta)
{
    $resta=$num1-$num2;
    echo "\nla resta de $num1 y $num2 es igual a $resta\n\n";
}
function multi($num1, $num2, $multi)
{
    $multi=$num1*$num2;
    echo "\nla multiplicacion de $num1 y $num2 es igual a $multi\n\n";
}
function divi($num1, $num2, $divi)
{
    $divi=$num1/$num2;
    echo "\nla division de $num1 entre $num2 es igual a $divi\n\n";
}
echo "\n1.Suma";
echo "\n2.Resta";
echo "\n3.Multiplicacion";
echo "\n4.Division";
echo "\n5.Salir\n\n";

b: $opcion=readline("Ingrese opcion: ");

switch ($opcion)
{
    case 1:
        $num1f=readline("\nIngrese primer numero: ");
        $num2f=readline("Ingrese segundo numero: ");
        suma($num1f, $num2f, $sumaf);
        goto a;
        break;

    case 2:
        $num1f=readline("\nIngrese primer numero: ");
        $num2f=readline("Ingrese segundo numero: ");
        resta($num1f, $num2f, $restaf);
        goto a;
        break;

    case 3:
        $num1f=readline("\nIngrese primer numero: ");
        $num2f=readline("Ingrese segundo numero: ");
        multi($num1f, $num2f, $multif);
        goto a;
        break;

    case 4:
        $num1f=readline("\nIngrese primer numero: ");
        $num2f=readline("Ingrese segundo numero: ");
        divi($num1f, $num2f, $divif);
        goto a;
        break;

    case 5:
        echo "adios";
        break;
    
    default:
        echo "Inserte una opcion valida\n\n";
        goto b;
        break;
}
?>