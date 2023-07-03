<?php
class Conn{
    private static $instancia = NULL;

    public static function criarInstancia() {
        if (!isset(self::$instancia)) {
            $optionsPDO[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;

            self::$instancia = new PDO('mysql:host=localhost;dbname=lojabebe; charset=utf8', 'root', '', $optionsPDO);
        }
        return self::$instancia;
    }

}
