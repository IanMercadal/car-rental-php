<?php

    require_once 'models/testimonial.php';

    class testimonialController{
        public function user() {
            $testimonial = new Testimonial();
            $testimonials = $testimonial->getAllFromUser();
    
            require_once './views/user/testimonials.php';
        }
    }
?>