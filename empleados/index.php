<?php declare(strict_types = 1);

include "empleado.php";

$empleado1 = new Empleado();
$empleado1->inicializar("Juan", 7000);
$empleado1->imprimir();

$empleado1 = new Empleado();
$empleado1->inicializar("Pedro", 5000);
$empleado1->imprimir();

?>