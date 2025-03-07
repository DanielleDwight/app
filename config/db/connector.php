<?php

class DBConnection
{
    // Database connection properties
    private $host = "localhost"; // Database host
    private $user = "root";      // Database username
    private $pass = "";          // Database password
    private $db = "login_page";      // Database name (update this)

    // Method to establish a database connection
    protected function connect()
    {
        try {
            // Construct the Data Source Name (DSN)
            $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db;
            // Create a new PDO instance
            $pdo = new PDO($dsn, $this->user, $this->pass);
            // Set PDO error mode to exception
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (PDOException $e) {
            // Handle connection errors
            die('Connection failed: ' . $e->getMessage());
        }
    }
}
