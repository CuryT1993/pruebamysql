<?php
class Database
{
    public static function Conectar()
    {
        $pdo = new PDO('mysql:host=curyservidor.mysql.database.azure.com;dbname=bdcury;charset=utf8', 'curytravez@curyservidor', 'Atahualpacury1993');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        return $pdo;


    }
}