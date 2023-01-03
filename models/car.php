<?php

class Car {
    private $brand;
    private $model;
    private $price;
    private $age;
    private $image;
    private $description;
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

    public function save() {
        $sql = "INSERT INTO cars VALUES(NULL, '{$this->getBrand()}', '{$this->getModel()}', {$this->getPrice()}, {$this->getAge()}, CURDATE() , '{$this->getImage()}', '{$this->getDescription()}', 3);";
        $save = $this->db->query($sql);

        $result = false;
        if($save) {
            $result = true;
        }
        return $result;
    }
    public function getAll() {
        $users = $this->db->query("SELECT * FROM cars ORDER BY id_car DESC");
        return $users;
    }
}

?>