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
                if (file_exists($file)) {
                    require_once $file;
                    return;
                }
            }
            
        });
    }
}
