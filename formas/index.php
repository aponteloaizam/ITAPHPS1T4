<?php declare(strict_types = 1);

include "triangulo.php";
include "rectangulo.php";

$triangulo = new Triangulo(2,3);
$rectangulo = new Rectangulo(3,5);

echo "El área del triángulo es: " . $triangulo->calcularArea() . "\n";
echo "El área del rectángulo es: " . $rectangulo->calcularArea();

?>