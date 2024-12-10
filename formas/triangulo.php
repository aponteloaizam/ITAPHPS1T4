<?php

include_once "forma.php";

class Triangulo extends Forma {

    public function calcularArea(): float {
        return ($this->alto * $this->ancho) / 2;
    }

}

?>