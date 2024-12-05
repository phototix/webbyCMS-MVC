<?php  
namespace App\Controllers;

// /app/Controllers/HomeController.php
class HomeController extends Controller {
    public function index() {
        $this->view('home', ['message' => 'Welcome to the Framework!']);
    }
}
?>