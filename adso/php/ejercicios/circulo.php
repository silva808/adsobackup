<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>area</title>
</head>
<body>
    <form method="post">
        
        <input type="number" name="radio"><br>
        <input type="submit">

    </form>
        
    <?php

        $rad=$_POST['radio'];
        $total=pi()*($rad*$rad);

        echo "<br>","el area es: ",$total;

        // hora inicio: 6:55:31
        // hora fin: 6:59:35
    ?>
</body>
</html>