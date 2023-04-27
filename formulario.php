<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulario de datos</h1>
    <form action='' method="post">
		<label>Nombre completo: </label><br>
        <input type="text" name="name" id="name"><br>
        <label>E-mail: </label><br>
        <input type="email" name="mail" id="mail"><br>
        <label>Telefono: </label><br>
        <input type="number" name="tel" id="tel"><br>
        <label>Direccion: </label><br>
        <input type="text" name="dir" id="dir"><br>
        <button type="submit">Ingresar</button>
	    </form>
    <?php
        $name=$_POST['name'];
        $mail=$_POST['mail'];
        $tel=$_POST['tel'];
        $dir=$_POST['dir'];

        echo "<br>Su nombre completo: $name<br>";
        echo "Su E-mail: $mail<br>";
        echo "Su telefono: $tel<br>";
        echo "Su dirección: $dir<br>";
    ?>
    <br><a href="index.php">Menu</a>
</body>
</html>