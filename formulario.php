<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <Link rel="stylesheet"  type="text/css"  href="style.php">
    <title>Compra completada</title>
</head>
<body>

<p



<?php


$nombre = $_POST['nombre'];
$password = $_POST['password'];
$genero = $_POST['genero'];
$email = $_POST['email'];
$materia = $_POST['materia'];
$telefono = $_POST['telefono'];

if(!empty($nombre) && !empty($password) && !empty($genero) && !empty($email) && !empty($materia) && !empty($telefono) )

echo "Hola $nombre tu compra fue completada.";
?>




</body>
</html>