<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>multiplication table</title>
</head>
<body>

    <form method="post">
        <input type="number" name="numero">
        <input type="number" name="max">
        <input type="submit">
    </form>
    
<?php
$a=$_POST['numero'];
$b=$_POST['max'];

    for ($i=1; $i<=$b; $i++){

        echo $a," x ",$i," =",$a*$i,"<br>";
    }

    // hora inicio: 6:51:55
    // hora fin: 6:54:51
?>
</body>
</html>