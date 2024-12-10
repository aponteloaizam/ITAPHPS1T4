<?php

class Empleado {

    private string $nombre;
    private int $sueldo;

    public function inicializar(string $nombre, int $sueldo) {
        $this->nombre = $nombre;
        $this->sueldo = $sueldo;
    }

    public function imprimir() {
        if ($this->sueldo > 6000) {
            echo $this->nombre . " paga impuestos.\n";
        }
        else {
            echo $this->nombre . " no paga impuestos.\n";
        }
    }
    
}

?>