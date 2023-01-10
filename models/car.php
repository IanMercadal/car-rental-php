<?php

class Car {
    private $id;
    private $brand;
    private $model;
    private $price;
    private $price_rent;
    private $age;
    private $image;
    private $description;
    private $state;
	private $db;

    public function __construct() {
		$this->db = Database::connect();
	}
    /**
     * Get the value of brand
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Get the value of model
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Get the value of price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Get the value of age
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Get the value of image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of brand
     */
    public function setBrand($brand): self
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Set the value of model
     */
    public function setModel($model): self
    {
        $this->model = $model;

        return $this;
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
     * Set the value of age
     */
    public function setAge($age): self
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Set the value of image
     */
    public function setImage($image): self
    {
        $this->image = $this->db->real_escape_string($image);

        return $this;
    }

    /**
     * Set the value of description
     */
    public function setDescription($description): self
    {
        $this->description = $description;

        return $this;
    }
    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
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
     * Get the value of state
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set the value of state
     */
    public function setState($state): self
    {
        $this->state = $state;

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

    public function save() {
        $id_user = intval($_SESSION['identity']->id_user);
        $sql = "INSERT INTO cars VALUES(NULL, '{$this->getBrand()}', '{$this->getModel()}', {$this->getPrice()}, {$this->getPriceRent()} ,{$this->getAge()}, CURDATE() , '{$this->getImage()}', '{$this->getDescription()}', 1, $id_user);";
        $save = $this->db->query($sql);
        
        $result = false;
        if($save) {
            $result = true;
        }
        return $result;
    }
    public function edit() {
        $sql = "UPDATE cars SET brand='{$this->getBrand()}', model='{$this->getModel()}', price={$this->getPrice()}, age={$this->getAge()}, description='{$this->getDescription()}' ";
        if($this->getImage() != null) {
            $sql .= ",image='{$this->getImage()}'";
        }
        
        $sql .= " WHERE id_car={$this->id};";
        
        $save = $this->db->query($sql);

        $result = false;
        if($save) {
            $result = true;
        }
        return $result;
    }
    public function delete() {
        $sql = "DELETE FROM cars where id_car = {$this->id}";
        $delete = $this->db->query($sql);

        $result = false;
        if($delete) {
            $result = true;
        }
        return $result;
    }
    public function getAll($limite = 8) {
        if($limite) {
            $users = $this->db->query("SELECT * FROM cars where state = 1 ORDER BY id_car DESC LIMIT $limite");
        } else {
            $users = $this->db->query("SELECT * FROM cars where state = 1 ORDER BY id_car DESC");
        }
        return $users;
    }
    public function getOne() {
        $car = $this->db->query("SELECT * FROM cars WHERE id_car = {$this->getId()}");
        return $car->fetch_object();
    }
}

?>