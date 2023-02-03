<?php
require_once 'models/user.php';

class userController {
    /* VIEWS */
    public function index() {

        if(!isset($_SESSION["identity"])) {
            require_once './views/user/login.php';
        } else {
            // renderizar vista
            $user = new User();
            $user_info = $user->getAllOrders();
    
            require_once './views/user/index.php';
        }
    }
    public function register() {
        // renderizar vista
        require_once './views/user/register.php';
    }
    public function login() {
        // renderizar vista
        require_once './views/user/login.php';
    }
    /* METHODS */
    public function save() {
        if(isset($_POST)) {
            Utils::deleteSession("admin");
            $name = isset($_POST['name']) ? $_POST['name'] : false;
            $surname = isset($_POST['surname']) ? $_POST['surname'] : false;
            $email = isset($_POST['email']) ? $_POST['email'] : false;
            $date = isset($_POST['date']) ? $_POST['date'] : false;
            $password = isset($_POST['password']) ? $_POST['password'] : false;
            $repassword = isset($_POST['repassword']) ? $_POST['repassword'] : false;

            if(strlen($name) <= 1 || strlen($surname) <= 3 || strlen($email) <= 5) {
                $_SESSION['register'] = "failed";
                header("Location:".base_url.'user/register');
                die();
            }

            if($name && $surname && $email && $date && $password && $repassword) {
                if($password === $repassword) {

                    $validarPassword = Utils::validarPassword($password);

                    if(!$validarPassword) {
                        $_SESSION['register'] = "failed";
                        header("Location:".base_url.'user/register');
                        die();
                    }
                    
                    // Setters
                    $user = new User();
                    $user->setName($name);
                    $user->setSurname($surname);
                    $user->setEmail($email);
                    $user->setDate($date);
                    $user->setPassword($password);

                    // Save image
                    if(isset($_FILES['image']["name"])) {
                        $file = $_FILES['image'];
                        $filename = $file['name'];
                        $mimetype = $file['type'];

                        if($mimetype == "image/jpg" || $mimetype == "image/jpeg" || $mimetype = "image/png" || $mimetype == "image/gif") {
                            if(!is_dir('uploads/images/users/')) {
                                mkdir('uploads/images/users/', 0777,true);
                            }

                            move_uploaded_file($file['tmp_name'],'uploads/images/users/'.$filename);
                            $user->setImage($filename);
                        }

                        $save = $user->save();
    
                        if($save){
                            $_SESSION['register'] = "complete";
                        }else{
                            $_SESSION['register'] = "failed";
                        }
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
                    header("Location:".base_url."car/admin");
                    die();
                } else {
                    header("Location:".base_url.'user/index');
                    die();
                }
            } else {
                $_SESSION['error_login'] = 'Identificación fallida';
            }
            header("Location:".base_url.'user/login');
        }
    }
    public function logout() {
        if(isset($_SESSION["identity"])) {
            $_SESSION["identity"] = null;
            unset($_SESSION["identity"]);
        }
        Utils::deleteSession("admin");
        // renderizar vista
        header("Location:".base_url."user/login");
    }
}