<?php
// /core/Autoload.php
class Autoload {
    public static function register() {
        spl_autoload_register(function ($class) {
            $path = __DIR__ . "/../" . str_replace("\\", "/", $class) . ".php";
            if (file_exists($path)) {
                require $path;
            }
        });
    }
}
