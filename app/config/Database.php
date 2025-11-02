<?php

class Database {

    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $dbname = "mvc_crud";

    protected $conn;

    public function __construct() {

        $this->connect();

    }

    private function connect() {

        $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->dbname);

        if ($this->conn->connect_error) {
            die("Database connection failed: " . $this->conn->connect_error);
        }

    }

    // optional test method

    public function testConnection() {

        return $this->conn ? "Database connected successfully!" : "Connection failed.";
        
    }

}
