<?php  
// /core/View.php
class View {
    public static function render($view, $data = []) {
        extract($data);
        require __DIR__ . '/app/Views/' . $view . '.php';
    }
}
?>