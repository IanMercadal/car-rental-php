<?php

class carController {
    public function index() {
        // renderizar vista
        require_once './views/cars/index.php';
    }
    public function list() {
        // renderizar vista
        require_once './views/cars/list.php';
    }
}