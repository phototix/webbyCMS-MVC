<?php  
// /core/Controller.php
class Controller {
    protected function view($view, $data = []) {
        extract($data);
        require __DIR__ . "/app/Views/" . $view . ".php";
    }
}

?>