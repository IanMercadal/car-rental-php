<?php
require_once 'models/user.php';

class userController {
    /* VIEWS */
    public function index() {
        // renderizar vista
        require_once './views/user/index.php';
    }
    public function register() {
        // renderizar vista
        require_once './views/user/register.php';
    }
    public function login() {
        // renderizar vista
        require_once './views/user/login.php';
    }
    public function admin() {
        // renderizar vista
        $user = new User();
        $users = $user->getAll();

        require_once './views/user/admin/index.php';
    }
    public function create_user() {
        // renderizar vista
        require_once './views/user/admin/create_user.php';
    }
    public function testimonials() {
        // renderizar vista
        require_once './views/user/testimonials.php';
    }
    public function orders() {
        // renderizar vista
        require_once './views/user/orders.php';
    }
    /* METHODS */
    public function save() {
        
        if(isset($_POST)) {
            $name = isset($_POST['name']) ? $_POST['name'] : false;
            $surname = isset($_POST['surname']) ? $_POST['surname'] : false;
            $email = isset($_POST['email']) ? $_POST['email'] : false;
            $date = isset($_POST['date']) ? $_POST['date'] : false;
            $password = isset($_POST['password']) ? $_POST['password'] : false;
            $repassword = isset($_POST['repassword']) ? $_POST['repassword'] : false;

            if($name && $surname && $email && $date && $password && $repassword) {
                if($password === $repassword) {
                    // Setters
                    $user = new User();
                    $user->setName($name);
                    $user->setSurname($surname);
                    $user->setEmail($email);
                    $user->setDate($date);
                    $user->setPassword($password);

                    $save = $user->save();
                    if($save){
                        $_SESSION['register'] = "complete";
                    }else{
                        $_SESSION['register'] = "failed";
                    }
                } else {
                    $_SESSION['register'] = "failed";
                }
            } else {
                $_SESSION['register'] = "failed";
            }
            header("Location:".base_url.'user/register');
        }
    }
    public function auth_login() {
        if(isset($_POST)) {
            $user = new User();
            $user->setEmail($_POST['email']);
            $user->setPassword($_POST['password']);

            $identity = $user->login();

            if($identity && is_object($identity)) {
                $_SESSION['identity'] = $identity;

                if($identity->rol == 'admin') {
                    $_SESSION['admin'] = true;
                    header("Location:".base_url."user/admin");
                    return;
                }
                header("Location:".base_url."user/index");
            } else {
                $_SESSION['error_login'] = 'Identificación fallida';
            }
        }
    }
    public function logout() {
        if(isset($_SESSION["identity"])) {
            $_SESSION["identity"] = null;
            unset($_SESSION["identity"]);
        }
        // renderizar vista
        header("Location:".base_url."user/login");
    }
}