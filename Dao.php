<?php
class Dao {
  private $host = "us-cdbr-iron-east-03.cleardb.net";
  private $db = "heroku_71bf8a8ca8adc07";
  private $user = "b049b89f773474";
  private $pass = "84829658";
  
  public function getConnection () 
  {
       $conn= new PDO("mysql:host={$this->host}; dbname={$this->db}", $this->user,
          $this->pass);
		return $conn;
  }
    public function getLogin ($username) {
		$conn = $this->getConnection();
		$loginQuery = "select * from user where username = :username";
		$q = $conn->prepare($loginQuery);
		$q->bindParam(":username", $username);
		$q->execute();
		return $q->fetchAll();
	}
	
	
    public function saveLogin ($username,$email, $password, $fullname) 
	{
		$conn = $this->getConnection();
		$passhash = password_hash($password, PASSWORD_DEFAULT);
		$saveQuery ="INSERT INTO user(username, email, password, fullname)VALUES(:username, :email, :password, :fullname)";
		$q = $conn->prepare($saveQuery);
		$q->bindParam(":username", $username);
		$q->bindParam(":email", $email);
		$q->bindParam(":password", $passhash);
		$q->bindParam(":fullname", $fullname);
		$q->execute();
	}
  }
  ?>