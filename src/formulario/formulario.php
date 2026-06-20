<?php

$mensaje = "";
$nombre_mostrado = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (!empty($_POST['nombre']) &&
        !empty($_POST['email']) &&
        !empty($_POST['telefono'])) {

        if (is_numeric($_POST['telefono'])) {

            $nombre_mostrado = htmlspecialchars($_POST['nombre']);
            $mensaje = "Bienvenido, $nombre_mostrado!";

        } else {

            $mensaje = "El teléfono debe ser numérico.";

        }

    } else {

        $mensaje = "Todos los campos son obligatorios.";

    }

}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulario</title>
</head>
<body>

<h2>Registro Rapido</h2>

<p style="color:blue;"><?= $mensaje ?></p>

<form method="POST" action="">

    <label>Nombre:
        <input type="text" name="nombre">
    </label>

    <br><br>

    <label>Email:
        <input type="email" name="email">
    </label>

    <br><br>

    <label>Teléfono:
        <input type="number" name="telefono">
    </label>

    <br><br>

    <button type="submit">Enviar</button>

</form>

<p><strong>Comparativa:</strong> Prueba cambiar <code>method="GET"</code> y observar la URL.</p>

</body>
</html>
