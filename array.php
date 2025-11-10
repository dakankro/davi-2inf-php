<?php
    $meses = array();

    $mes = [
        'Janeiro','Fevereiro','Março','Abril','Maio','Junho', 'Julho', 'Agosto','Setembro','Outubro', 'Novembro','Dezembro'
    ];

    foreach ($mes as $key => $value) {
        echo $key . ': ' . $value . '<br>';
    }

    echo '<hr>';
    echo 'VAR_DUMP';
    var_dump($mes);
    echo '<hr>';
    echo 'posição  ';
    echo '<br>';
    echo $mes[2];
    echo '<hr>';

    function dataAtual(): string
    {
        $diaMes = date('d');
        $diaSemana = date('w');
        $mes = date('n');
        $ano = date('Y');

        $nomeDosMeses = ['Janeiro','Fevereiro','Março','Abril','Maio','Junho', 'Julho', 'Agosto','Setembro','Outubro', 'Novembro','Dezembro'
        ];
        $nomeDiaSemana = ['Domingo','Segunda-feira','Terça-feira','Quarta-feira','Quinta-feira','Sexta-feira','Sabado'];
        $dataAtual =  $nomeDiaSemana[$diaSemana] . ';'.$diaMes.' de ' . $nomeDosMeses[$mes] . '/' . $ano . '.';
        echo 'Dia do mes '.$diaMes.'<br>'.'Dia da  '.$diaSemana.'<br>'.'Ano'.$ano.'<br>';
        return $dataAtual;
    }
    echo dataAtual();
