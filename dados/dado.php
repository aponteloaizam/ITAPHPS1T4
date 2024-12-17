<?php

class DadoPoquer {

    private $cara = ["As", "J", "Q", "K", "7", "8"];

    public function tirar(): int {
        $tiro = rand(0,5);
        return $tiro;
    }

    public function nombrar(int $tiro): string {
        $nombre = $this->cara[$tiro];
        return $nombre;
    }

}

?>