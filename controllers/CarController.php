<?php

require_once 'models/car.php';

class carController {
    /* VIEWS */
    public function index() {
        $car = new Car();
        $cars = $car->getAll(8);
        // renderizar vista
        require_once './views/cars/index.php';
    }
    public function list() {
        $car = new Car();
        $cars = $car->getAll();
        // renderizar vista
        require_once './views/cars/list.php';
    }
    public function admin() {
        Utils::isAdmin();
        // renderizar vista
        $car = new Car();
        $cars = $car->getAll();
        require_once './views/user/admin/cars.php';
    }
    public function car() {
        if(isset($_GET['id_car'])) {
            $id = $_GET['id_car'];

            // Get car
            $car = new Car();
            $car->setId($id);
            $car = $car->getOne();
        }
        // renderizar vista
        require_once './views/cars/car.php';
    }
    public function save() {
        Utils::isAdmin();
        if(isset($_POST)) {
            $brand = isset($_POST['brand']) ? $_POST['brand'] : false;
            $model = isset($_POST['model']) ? $_POST['model'] : false;
            $price = isset($_POST['price']) ? $_POST['price'] : false;
            $price_rent = isset($_POST['price_rent']) ? $_POST['price_rent'] : false;
            $age = isset($_POST['age']) ? $_POST['age'] : false;
            $description = isset($_POST['description']) ? $_POST['description'] : false;

            if($brand && $model && $price && $age && $description && $price_rent ) {
                    // Setters
                    $car = new Car();
                    $car->setBrand($brand);
                    $car->setModel($model);
                    $car->setPrice($price);
                    $car->setPriceRent($price_rent);
                    $car->setAge($age);
                    $car->setDescription($description);

                    // Save image
                    if(isset($_FILES['image'])) {
                        $file = $_FILES['image'];
                        $filename = $file['name'];
                        $mimetype = $file['type'];

                        if($mimetype == "image/jpg" || $mimetype == "image/jpeg" || $mimetype = "image/png") {
                            if(!is_dir('uploads/images')) {
                                mkdir('uploads/images', 0777,true);
                            }

                            move_uploaded_file($file['tmp_name'],'uploads/images/'.$filename);
                            $car->setImage($filename);
                        }
                    }

                    if(isset($_GET['id'])) {
                        $id = $_GET['id'];
                        $car->setId($id);
                        $save = $car->edit();
                    } else {
                        $save = $car->save();
                    }

                    if($save){
                        $_SESSION['car'] = "complete";
                    }else{
                        $_SESSION['car'] = "failed";
                    }
                } else {
                    $_SESSION['car'] = "failed";
                }
            require_once './views/user/admin/query_result.php';
        }
    }
    public function create() {
        Utils::isAdmin();
        // renderizar vista
        require_once './views/user/admin/create_car.php';
    }
    public function edit() {
        Utils::isAdmin();
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
        
            $car = new Car();
            $car->setId($id);
            $car = $car->getOne();
        }
        require_once './views/user/admin/edit_car.php';
    }
    public function delete() {
        Utils::isAdmin();
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
            $car = new Car();
            $car->setId($id);

            $delete = $car->delete();
            
            if($delete) {
                $_SESSION['delete'] = "complete";
                require_once './views/user/admin/query_result.php';
            } else {
                $_SESSION['delete'] = "failed";
                require_once './views/user/admin/query_result.php';
            }
        } else {
            $_SESSION['delete'] = "complete";
        }
    }
}