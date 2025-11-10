<?php
function media(int $n1, int $n2, int $n3, int $n4)
{
    $media = ($n1 + $n2 + $n3 + $n4) / 4;
    return $media;
}
echo 'Sua media e '. media(7,6,4,9).'<br>';

