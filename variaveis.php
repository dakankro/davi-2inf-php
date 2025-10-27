<?php
    echo 'oi mundo <br>';
    echo '<hr>';
    print 'oi mundo';
    echo '<hr>';
    echo '<p style="font-family: Microsoft JhengHei, sans-serif">ksdarqw pa dfiiushsifu mkl</p>';

    $nome = 'jon';
    $sobreNome = 'doe';
    $nomeCompleto = $nome . ' ' . $sobreNome;
    echo '<hr>';
    echo ($nomeCompleto);
    var_dump($nomeCompleto);
    echo '<hr>';
    $cpf = '123456789';
    var_dump($cpf);
    echo '<hr>';

    if ($cpf == '1234567ui9' or $cpf == '123456789') {
        echo 'cpf estranho';
    }else{
        echo 'aafsdrtyd';
    }

    function soma($a, $b)
    {
        return $a + $b;
    }
    echo soma(3, 3);
    echo '<hr>';

    function imcc(float $altura,float $peso) : string
    {
        $imc = $peso / (($altura / 100) ** 2);
        if ($imc < 18.5) {
            return 'abaixo de peso';
        } elseif ($imc >= 18.5 && $imc <= 24.9) {
            return 'normal';
        } elseif ($imc >= 24.9 && $imc <= 29.9) {
            return 'sobrepeso';
        } else {
            return 'obesidade';
        }
    }

    echo imcc(180, 68);
