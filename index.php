<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <ul>
            <h1>Menu principal</h1>
            <li>1. Datos</li>
            <li>2. Suma</li>
            <li>3. Resta</li>
            <li>4. Multiplicación</li>
            <li>5. División</li>
        </ul>
        <form action='' method="post">
			<p>Ingrese la opcion</p>
            <input type="number" name="opc" id="opc">
            <button type="submit">Ingresar</button>
		</form>
    </div>
</body>
</html>
<?php
$opc=$_REQUEST['opc'];
switch ($opc) {
    case '1':
        header( 'Location: formulario.php');
            break;
    case '2':
        header( 'Location: formularioSuma.php');
        break;
    case '3':
        header( 'Location: formularioResta.php');
        break;
    case '4':
        header( 'Location: formularioMultiplicacion.php');
        break;
    case '5':
        header( 'Location: formularioDivision.php');
            break;
    default:
        echo "<br>Por favor ingrese una opcion valida";
        break;
}
?>