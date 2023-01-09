<?php

class User {
    private $id;
	private $name;
	private $surname;
	private $email;
    private $date;
	private $password;
	private $rol;
	private $image;
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
	 * Get the value of name
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * Get the value of surname
	 */
	public function getSurname()
	{
		return $this->surname;
	}

	/**
	 * Get the value of email
	 */
	public function getEmail()
	{
		return $this->email;
	}

    /**
     * Get the value of date
     */
    public function getDate()
    {
        return $this->date;
    }

	/**
	 * Get the value of password
	 */
	public function getPassword()
	{
		return password_hash($this->db->real_escape_string($this->password), PASSWORD_BCRYPT, ['cost' => 4]);
	}

	/**
	 * Get the value of rol
	 */
	public function getRol()
	{
		return $this->rol;
	}

	/**
	 * Get the value of image
	 */
	public function getImage()
	{
		return $this->image;
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
	 * Set the value of name
	 */
	public function setName($name): self
	{
		$this->name = $name;

		return $this;
	}

	/**
	 * Set the value of surname
	 */
	public function setSurname($surname): self
	{
		$this->surname = $surname;

		return $this;
	}

	/**
	 * Set the value of email
	 */
	public function setEmail($email): self
	{
		$this->email = $email;

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
	 * Set the value of password
	 */
	public function setPassword($password): self
	{
		$this->password = $password;

		return $this;
	}

	/**
	 * Set the value of rol
	 */
	public function setRol($rol): self
	{
		$this->rol = $rol;

		return $this;
	}

	/**
	 * Set the value of image
	 */
	public function setImage($image): self
	{
		$this->image = $image;

		return $this;
	}

    public function save() {
        $sql = "INSERT INTO users VALUES(NULL, '{$this->getName()}', '{$this->getSurname()}', '{$this->getDate()}', CURDATE(), 'user', '{$this->getEmail()}', '{$this->getPassword()}', NULL);";
        $save = $this->db->query($sql);

        $result = false;
        if($save) {
            $result = true;
        }
        return $result;
    }

    public function login() {
        $result = false;
        $email = $this->email;
        $password = $this->password;

        $sql = "SELECT * FROM users WHERE email = '{$email}'";
        $login = $this->db->query($sql);

        if($login && $login->num_rows == 1) {
            $user = $login->fetch_object();

			// Verificar contraseña
			$verify = password_verify($password, $user->password);

            if($verify) {
                $result = $user;
            }
        }
        return $result;
    }

	public function getAll() {
        $users = $this->db->query("SELECT * FROM users ORDER BY id_user DESC");
        return $users;
    }
}
