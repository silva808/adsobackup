<?php

    echo"par o impar\n";
    $input=readline("\ntype a number: ");

    $result=$input%2;

    if($result==0){
        echo"el numero es par";
    }
    else{
        echo"el numero es impar";
    }
?>