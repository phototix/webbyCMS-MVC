<?php  
namespace App\Controllers;

// /app/Controllers/Database.php
class Database extends Controller {
    public function index() {
        $this->view('home', ['message' => 'Welcome to the Framework!']);
    }
}
?>