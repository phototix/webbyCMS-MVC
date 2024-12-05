<?php
// /core/Database.php
class Database {
    private static $instance = null;
    private $pdo;

    private function __construct($config) {
        $dsn = "mysql:host={$config['host']};dbname={$config['database']}";
        $this->pdo = new PDO($dsn, $config['username'], $config['password'], [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    }

    public static function getInstance($config) {
        if (self::$instance === null) {
            self::$instance = new Database($config);
        }
        return self::$instance;
    }

    public function query($sql) {
        return $this->pdo->query($sql);
    }
}
?>
