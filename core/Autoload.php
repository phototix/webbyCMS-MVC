<?php
// /core/Autoload.php
class Autoload {
    public static function register() {
        spl_autoload_register(function ($class) {
            $paths = [
                __DIR__ . '/core/',
                __DIR__ . '/app/Controllers/',
                __DIR__ . '/app/Models/',
                __DIR__ . '/app/Views/',
            ];

            foreach ($paths as $path) {
                $file = $path . $class . '.php';
                echo $file;
                if (file_exists($file)) {
                    require_once $file;
                    return;
                }
            }

            // Debugging output for missing classes
            die("Class file for {$class} not found in registered paths.");
        });
    }
}
