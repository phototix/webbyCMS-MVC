<?php
// /core/Autoload.php
class Autoload {
    public static function register() {
        spl_autoload_register(function ($class) {
            $paths = [
                '/core/',
                '/app/Controllers/',
                '/app/Models/',
                '/app/Views/',
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
