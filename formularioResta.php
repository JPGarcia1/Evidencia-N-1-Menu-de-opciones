<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulario de resta</h1>
    <form method="post">
        <label>Ingrese el primer numero</label><br>
        <input type="number" name="n1" id="n1"><br>
        <label>Ingrese el segundo numero</label><br>
        <input type="number" name="n2" id="n2"><br>
        <button type="submit">Restar</button>
    </form>
    <?php
        $n1=$_POST['n1'];
        $n2=$_POST['n2'];
        $res;

        $res = $n1-$n2;

        echo "$n1 - $n2 = $res";
    ?>
    <br><a href="index.php">Menu</a>
</body>
</html>