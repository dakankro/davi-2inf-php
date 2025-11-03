<?php
function contarTempo(string $data) : string {
    $agora = strtotime(date('Y-m-d H:i:s'));
    $tempo = strtotime($data);


    echo('Data do PC ' . $agora);
    echo "<hr>";
    echo('Data digitada ' . $tempo);
    $diference = $agora - $tempo;
    echo "<hr>";
    echo('Diferença ' . $diference);

    $segundos = $diference;
    $minutos = round(num: $diference / 60);// um minuto tem 60
    $horas = round(num: $diference / 3600);// uma hora tem 60 minutos
    $dias = round(num: $diference / 86400);// um dia tem 24 horas
    $semanas = round(num: $diference / 604800);// uma semana tem sete dias
    $meses = round(num: $diference / 2419200);// um mês tem quatr semanas
    $anos = round(num: $diference / 29030400);// um ano tem doze meses

    return $tempo;
}