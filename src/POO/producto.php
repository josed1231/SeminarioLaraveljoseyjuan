<?php
class Producto {
    private $nombre;
    private $precio;
    private $iva;
    private $categoria;

    public function __construct($nombre, $precio, $iva = 0.19, $categoria = "General") {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->iva = $iva;
        $this->categoria = $categoria;
    }

    public function getPrecioFinal() {
        return $this->precio * (1 + $this->iva);
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function getInfo() {
        return "Producto: {$this->nombre} | Categoría: {$this->categoria} | Precio final: $" . $this->getPrecioFinal();
    }
}
?>
