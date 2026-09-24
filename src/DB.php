<?php
namespace App;

use PDO;
use PDOException;

class DB {
    public function __construct()
    {
        $servername = "localhost:33061";
        $username = "root";
        $password = "example";
        $dbname = "learnphp";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}