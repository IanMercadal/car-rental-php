<?php

class userController {
    public function index() {
        // renderizar vista
        require_once './views/user/index.php';
    }
    public function register() {
        // renderizar vista
        require_once './views/user/register.php';
    }
    public function save() {
        // renderizar vista
        echo "Controlador Usuarios, acción register";
    }
    public function login() {
        // renderizar vista
        require_once './views/user/login.php';
    }
}