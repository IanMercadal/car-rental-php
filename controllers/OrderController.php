<?php 

require_once 'models/order.php';

class orderController {
    public function save() {
        if(isset($_POST)) {
            $date = isset($_POST['date']) ? $_POST['date'] : false;
            $service = isset($_POST['service']) ? $_POST['service'] : false;
            $id_user = isset($_POST['id_user']) ? $_POST['id_user'] : false;
            $id_car = isset($_POST['id_car']) ? $_POST['id_car'] : false;

            if($date && $service && $id_user && $id_car) {
                $order = new Order();
                $order->setDate($date);
                $order->setService($service);
                $order->setIdUser($id_user);
                $order->setIdCar($id_car);
                
                $save = $order->save();
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
}

?>