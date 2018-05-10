<?php
class Database
{
    public static function Conectar()
    {
        $pdo = new PDO('mysql:servidorcury.mysql.database.azure.com;dbname=bdcury;charset=utf8', 'curyt@servidorcury', 'Atahualpacury1993');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
        return $pdo;


    }
}