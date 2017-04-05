<?php
/**
 * Created by PhpStorm.
 * User: dudu
 * Date: 05/04/17
 * Time: 10:13
 */
class DBConfig
{
    //database configuration
    static private $dbHost = 'localhost';
    static private $dbUsername = 'books';
    static private $dbPassword = 'books';
    static private $dbName = 'mybookmanager';
    static private $db = null;

    public static  function getConnection()
    {
        //connect with the database
        self::$db = new mysqli(self::$dbHost,self::$dbUsername,self::$dbPassword,self::$dbName);
        return self::$db;
    }
}