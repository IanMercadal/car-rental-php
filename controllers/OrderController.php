<?php 

require_once 'models/order.php';

class orderController {
    public function save() {
        if(isset($_POST)) {
            $date = isset($_POST['date']) ? $_POST['date'] : false;
            $service = isset($_POST['service']) ? $_POST['service'] : false;
            $id_user = isset($_POST['id_user']) ? $_POST['id_user'] : false;
            $id_car = isset($_POST['id_car']) ? $_POST['id_car'] : false;
            $price = isset($_POST['price']) ? $_POST['price'] : false;
            $price_rent = isset($_POST['price_rent']) ? $_POST['price_rent'] : false;

            if($date && $service && $id_user && $id_car) {
                $order = new Order();
                $order->setDate($date);
                $order->setService($service);
                $order->setIdUser($id_user);
                $order->setIdCar($id_car);

                $option = "";
                if($service === "buy" && isset($price)) {
                    $order->setPrice($price);
                    $option = "buy";
                } 
                if ($service === "rent" && isset($price_rent)) {
                    $order->setPriceRent($price_rent);
                    $option = "rent";
                }
                
                $save = $order->save($option);

                if($save){
                    $_SESSION['order'] = "complete";
                }else{
                    $_SESSION['order'] = "failed";
                }
            } else {
                $_SESSION['order'] = "failed";
            }
        } else {
            $_SESSION['register'] = "failed";
        }
        header("Location:".base_url.'car/car&id_car=' . $id_car );
    }
    public function user() {
        $order = new Order();
        $orders = $order->getAllFromUser();

        require_once './views/user/orders.php';
    }
}

?>