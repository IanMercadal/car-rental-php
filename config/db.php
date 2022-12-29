<?php

class Database {
    public static function connect() {
        $db = new mysqli('localhost','root','root','car_rental');
        return $db;
    }
}