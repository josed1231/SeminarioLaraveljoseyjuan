<?php
$productos = [
        "laptop" => 1200,
        "mouse" => 25,
        "Teclado" => 45,
        "Monitor" => 300
];

echo "<h2>lista de productos</h2>";
echo "<ul>";
$total = 0;
foreach ($productos as $nombre => $precio) {
        echo "<li>$nombre: $$precio</li>";
        $total += $precio;
}
$totalConIva = $total * 1.19;
echo "</ul>";
echo"<p><strong>total sin iva: $$total</strong></p>";
echo"<p><strong>total con iva: $$totalConIva</strong></p>";
?>
