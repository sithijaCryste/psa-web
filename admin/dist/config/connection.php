<?php

class Database {

    public static $connection;

    public static function setupConnection() {
        if (!isset(Database::$connection)) {
            Database::$connection = new mysqli("localhost", "root", "20030925", "psa_db", "3306");

            // Check connection
            if (Database::$connection->connect_error) {
                die("Connection failed: " . Database::$connection->connect_error);
            }
        }
    }

    public static function iud($q) {
        Database::setupConnection();
        $result = Database::$connection->query($q);

        if ($result === true) {
            return true;
        } else {
            // Return false on failure and log the error for debugging
            error_log("Database Error: " . Database::$connection->error);
            return false;
        }
    }

    public static function search($q) {
        Database::setupConnection();
        $resultset = Database::$connection->query($q);

        if ($resultset === false) {
            error_log("Database Search Error: " . Database::$connection->error);
            return null;
        }

        return $resultset;
    }
}

?>
