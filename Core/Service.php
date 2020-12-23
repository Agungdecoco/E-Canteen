<?php

require __DIR__ . "/MySQL.php";

class Service
{
    /**
     * MySQL connection.
     *
     * @var object
     */
    private static $conn;

    /**
     * Get MySQL connection.
     *
     * @return object
     */
    protected static function getConnection()
    {
        if (!self::$conn) {
            self::createConnection();
        }

        return self::$conn;
    }

    /**
     * Create connection.
     *
     * @return void
     */
    private static function createConnection()
    {
        $mysql = new MySQL();
        self::$conn = $mysql->conn;
    }

    /**
     * Close MySQL connection.
     *
     * @return void
     */
    protected static function closeConnection()
    {
        self::getConnection()->close();
    }
}
