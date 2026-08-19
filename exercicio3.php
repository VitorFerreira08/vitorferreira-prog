<?php

class AcessoSistema {
    private static $totalAcessos = 0;

    function __construct() {
        self::$totalAcessos++;
    }

    public static function getAcessos() {
        return self::$totalAcessos;
    }
}

$a = new AcessoSistema();
$b = new AcessoSistema();
$c = new AcessoSistema();
$d = new AcessoSistema();

echo AcessoSistema::getAcessos();

?>
