<?php
require_once 'POO/Producto.php';

$prod1 = new Producto("laptop gamer", 1500);
$prod2 = new Producto("mouse inalambrico", 80);
$prod3 = new Producto("monitor 4K", 1200, 0.19);

echo "<h2>Catalogo POO</h2>";
echo "<ul>";
echo "<li>" . $prod1->getInfo() . "</li>";
echo "<li>" . $prod2->getInfo() . "</li>";
echo "<li>" . $prod3->getInfo() . "</li>";
echo "</lu>";


?>
