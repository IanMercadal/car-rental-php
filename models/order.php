<?php 

class Order {
    private $id;
    private $id_user;
    private $id_car;
    private $date;
    private $service;
    private $price;
    private $price_rent;
    private $db;

    public function __construct() {
		$this->db = Database::connect();
	}

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of id_user
     */
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * Get the value of id_car
     */
    public function getIdCar()
    {
        return $this->id_car;
    }

    /**
     * Get the value of date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Get the value of service
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Set the value of id_user
     */
    public function setIdUser($id_user): self
    {
        $this->id_user = $id_user;

        return $this;
    }

    /**
     * Set the value of id_car
     */
    public function setIdCar($id_car): self
    {
        $this->id_car = $id_car;

        return $this;
    }

    /**
     * Set the value of date
     */
    public function setDate($date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Set the value of service
     */
    public function setService($service): self
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     */
    public function setPrice($price): self
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of price_rent
     */
    public function getPriceRent()
    {
        return $this->price_rent;
    }

    /**
     * Set the value of price_rent
     */
    public function setPriceRent($price_rent): self
    {
        $this->price_rent = $price_rent;

        return $this;
    }

    public function save($option) {
        if($option === "buy") {
            $sql = "INSERT INTO orders VALUES(NULL, '{$this->getIdUser()}', '{$this->getIdCar()}', '{$this->getDate()}', '{$this->getService()}', {$this->getPrice()});";
        } else {
            $sql = "INSERT INTO orders VALUES(NULL, '{$this->getIdUser()}', '{$this->getIdCar()}', '{$this->getDate()}', '{$this->getService()}', {$this->getPriceRent()});";
        }
        
        $save = $this->db->query($sql);

        if($save && $option === "buy") {
            $update_car_sql = "UPDATE cars SET state=0 where id_car = '{$this->getIdCar()}'";
            $update = $this->db->query($update_car_sql);

            $result = false;
            if($save && $update) {
                $result = true;
            }
            return $result;
        }

        
        $result = false;
        if($save) {
            $result = true;
        }
        return $result;
    }
    public function getAllFromUser() {
        $id_user = $_SESSION['identity']->id_user;
        $orders = $this->db->query("SELECT * FROM orders where id_user = '{$id_user}' ORDER BY id_order DESC");
        return $orders;
    }
    public function checkDate() {
        $orders = $this->db->query("SELECT * FROM orders where id_car = {$this->getIdCar()} and date = '{$this->getDate()}'");
        return $orders->fetch_object();
    }
}

?>