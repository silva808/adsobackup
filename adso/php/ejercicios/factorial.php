<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>factorial</title>
</head>
<body>
    
    <form method="post">
        <input type="number" name="num">
        <input type="submit">
    </form>
    
    <?php
    
    $fac=$_POST['num'];
    $total=1;
    
    for($i=1; $i<=$fac;$i++){

        $total*=$i;
    }
    
    echo "<br>","factorial es: ",$total;

    // hora inicio : 7:00:56
    // hora fin: 7:07:40
?>
</body>
</html>
