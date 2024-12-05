<?php  
// /core/Database.php
class Database {
    private static $instance = null;
    private $pdo;

    private function __construct() {
        $this->pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '');
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function query($sql) {
        return $this->pdo->query($sql);
    }
}
?>