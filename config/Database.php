<?php
    class Database
    {
        // Database Configuration
        private static $hostname = "localhost";
        private static $username = "aing";
        private static $password = "kumahaaing";
        private static $database = "ign";
        

        public function __construct()
        {   
        }        

        public static function get_instance()
        {
            // Connect to Database
            try {
                $conn = new PDO("mysql:host=".self::$hostname.";dbname=".self::$database."", self::$username, self::$password);
                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);                    
                return $conn;
            } catch (PDOException $err) {
                echo "Connection failed: " . $err->getMessage();
            }            
        }
    }
    
?>
