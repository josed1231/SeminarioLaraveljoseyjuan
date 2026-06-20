<?php
require_once 'producto.php';

$prod1 = new Producto("Laptop Gamer", 1500, 0.19, "Electrónica");
$prod2 = new Producto("Mouse Inalámbrico", 80, 0.19, "Electrónica");
$prod3 = new Producto("Monitor 4K", 1200, 0.19, "Oficina");
$prod4 = new Producto("Silla Ergonómica", 350, 0.19, "Oficina");

echo "<h2>Catálogo POO</h2>";
echo "<ul>";
echo "<li>" . $prod1->getInfo() . "</li>";
echo "<li>" . $prod2->getInfo() . "</li>";
echo "<li>" . $prod3->getInfo() . "</li>";
echo "<li>" . $prod4->getInfo() . "</li>";
echo "</ul>";
?>
