<?php

class Configura
{
    // nome banco
    public static function banco()
    {
        $banco = "igreja";
        return $banco;
    }
    // host do banco
    public static function host()
    {
        $host = "localhost";
        return $host;
    }

    // usuario do banco
    public static function usuario()
    {
        $usuario = "root";
        return $usuario;
    }

    // senha do banco
    public static function senha()
    {
        $senha = 123;
        return $senha;
    }

    public static function dns()
    {
        // $dns = "pgsql";
        $dns = "mysql";
        return $dns;
    }

    public static function porta()
    {
        // $porta = '5432';
        // return $porta;
    }

}