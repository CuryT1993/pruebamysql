<?php
class Database
{
    public static function Conectar()
    {
        $pdo = new PDO('mysql:curytravez.mysql.database.azure.com;dbname=bdcury;charset=utf8', 'curytravez@curytravez', 'Atahualpacury1993');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        return $pdo;
    }
}