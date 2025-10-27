<?php
date_default_timezone_set("America/Sao_Paulo");

function saudacao(): string
{
    // formato de data Y-m-d H:i:s
    $hora = date('H');
    if ($hora >= 0 && $hora < 5) {
        $saudacao = "Boa madrugada";
    }elseif ($hora >= 5 && $hora < 12) {
        $saudacao = "Boa dia";
    }elseif ($hora >= 12 && $hora < 18) {
        $saudacao = "Boa tarde";
    }else{
        $saudacao = "Boa noite";
    }
    return $saudacao;
}

function contartime(string $data) : string

{


}