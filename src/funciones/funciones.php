<?php
function calcularPrecioFinal ($precio, $iva = 0.19) {
	return $precio * (1 + $iva);
}

$inventario = [
	"laptop" => 1200,
	"mouse" => 25,
	"teclado" => 45

];

echo "<h2>precios con iva include</h2>";
foreach ($inventario as $nombre => $precio) {
	$precioFinal = calcularPrecioFinal ($precio);

	if ($precioFinal > 100) {
	echo "<p><strong style='color:red;'>$nombre: $$precioFinal (caro)</strong></p>";
	} else {
		echo"<p>$nombre: $$precioFinal (economico)</p>";
	}
}


function esMayorDeEdad($edad) {

    if ($edad >= 18) {
        return true;
    } else {
        return false;
    }

}

$edades = [12, 25, 17, 30, 15];

echo "<hr>";
echo "<h2>Verificación de edades</h2>";

foreach ($edades as $edad) {

    if (esMayorDeEdad($edad)) {

        echo "<p>La persona con edad $edad es <strong>MAYOR</strong> de edad.</p>";

    } else {

        echo "<p>La persona con edad $edad es <strong>MENOR</strong> de edad.</p>";

    }

}



?>
