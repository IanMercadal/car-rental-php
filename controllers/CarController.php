<?php

require_once 'models/car.php';

class carController {
    public function index() {
        // renderizar vista
        require_once './views/cars/index.php';
    }
    public function list() {
        // renderizar vista
        require_once './views/cars/list.php';
    }
    public function save() {
        if(isset($_POST)) {
            $brand = isset($_POST['brand']) ? $_POST['brand'] : false;
            $model = isset($_POST['model']) ? $_POST['model'] : false;
            $price = isset($_POST['price']) ? $_POST['price'] : false;
            $age = isset($_POST['age']) ? $_POST['age'] : false;
            $description = isset($_POST['description']) ? $_POST['description'] : false;

            if($brand && $model && $price && $age && $description ) {
                    // Setters
                    $car = new Car();
                    $car->setBrand($brand);
                    $car->setModel($model);
                    $car->setPrice($price);
                    $car->setAge($age);
                    $car->setDescription($description);

                    // Save image
                    if(isset($_FILES['image'])) {
                        $file = $_FILES['image'];
                        $filename = $file['name'];
                        $mimetype = $file['type'];

                        if($mimetype == "image/jpg" || $mimetype == "image/jpeg" || $mimetype = "image/png" || $mimetype == "image/gif") {
                            if(!is_dir('uploads/images')) {
                                mkdir('uploads/images', 0777,true);
                            }

                            move_uploaded_file($file['tmp_name'],'uploads/images/'.$filename);
                            $car->setImage($filename);
                        }
                    }

                    $save = $car->save();

                    if($save){
                        $_SESSION['car'] = "complete";
                    }else{
                        $_SESSION['car'] = "failed";
                    }
                } else {
                    $_SESSION['car'] = "failed";
                }
            header("Location:".base_url.'user/admin&cars');
        }
    }
}