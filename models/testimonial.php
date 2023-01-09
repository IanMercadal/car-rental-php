<?php
    class Testimonial {
        private $db;

        public function __construct() {
            $this->db = Database::connect();
        }

        public function getAllFromUser() {
            $id_user = $_SESSION['identity']->id_user;
            $orders = $this->db->query("SELECT * FROM testimonials where id_user = '{$id_user}' ORDER BY id_testimonial DESC");
            return $orders;
        }

    }
?>