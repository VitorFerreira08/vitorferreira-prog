<?php

class Conversor {
    public static function dolarParaReal($valor) {
        return $valor * 5.00;
    }
}

// Opção A
$v1 = new Conversor();
echo $v1->dolarParaReal(10);

// Opção B
echo Conversor::dolarParaReal(10);


// A opção B é a mais correta porque, sendo um método estático, não precisa criar um objeto para chamá-lo.