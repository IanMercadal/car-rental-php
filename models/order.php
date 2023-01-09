<?php 

class Order {
    private $id;
    private $id_user;
    private $id_car;
    private $date;
    private $service;
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

    public function save() {
        $sql = "INSERT INTO orders VALUES(NULL, '{$this->getIdUser()}', '{$this->getIdCar()}', '{$this->getDate()}', '{$this->getService()}');";
        $save = $this->db->query($sql);

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
}

?>