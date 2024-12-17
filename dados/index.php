<?php declare(strict_types = 1);

include "dado.php";

$dado = new DadoPoquer();
$tiros = 0;

function jugar($dado): string {
    $jugada = "";
    global $tiros;
    for ($i = 0; $i < 5; $i++) {
        $tiro = $dado->tirar();
        $nombre = $dado->nombrar($tiro);
        $jugada .= $nombre . " ";
        $tiros++;
    }
    return "Tu jugada es: " . $jugada . "\n";
}

function contarTiros(): string {
    global $tiros;
    return "Se han realizado " . ($tiros / 5) . " tiradas de 5 dados al tiempo, para un total de " . $tiros . " dados jugados.\n";
}

echo jugar($dado);
echo jugar($dado);
echo jugar($dado);
echo contarTiros();

?>