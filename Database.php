<?php
class Database {
    private $host = "localhost";
    private $db   = "sekolah";
    private $user = "postgres";
    private $pass = "password";
    public $conn;

    public function connect() {
        $this->conn = new PDO(
            "pgsql:host=$this->host;dbname=$this->db",
            $this->user,
            $this->pass
        );
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $this->conn;
    }
}
