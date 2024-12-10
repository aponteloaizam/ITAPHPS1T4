<?php

include_once "forma.php";

class Rectangulo extends Forma {

    public function calcularArea(): float {
        return $this->alto * $this->ancho;
    }

}

?>