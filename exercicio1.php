<?php

class Usuario {
    public static $nome = "Ana";

    public static function exibirNome() {
        echo self::$nome;
    }
}

Usuario::exibirNome();
