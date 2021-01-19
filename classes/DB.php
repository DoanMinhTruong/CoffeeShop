<?php
	class DB{
		private $conn = NULL;
		// initialize
		public function init(){
			$query = "
						CREATE TABLE IF NOT EXISTS user(
							id INT AUTO_INCREMENT PRIMARY KEY,
							username VARCHAR(255) NOT NULL,
							password VARCHAR(255) NOT NULL,
							phone VARCHAR(255),
							email VARCHAR(255)
						);
						CREATE TABLE IF NOT EXISTS menu(
							id INT AUTO_INCREMENT PRIMARY KEY,
							name VARCHAR(255) NOT NULL,
							price INT NOT NULL,
							image VARCHAR(255) 
						);
						CREATE TABLE IF NOT EXISTS cart(
							id INT AUTO_INCREMENT PRIMARY KEY,
							cartnumber INT NOT NULL,
						);
						CREATE TABLE IF NOT EXISTS cart_item(
							id INT AUTO_INCREMENT PRIMARY KEY,
							cartnumber INT NOT NULL FOREIGN KEY REFERENCES cart(cartnumber),
							item INT NOT NULL FOREIGN KEY REFERENCES menu(id)
						);
					";
			$stmt = $this->conn->prepare($query);
			$stmt->execute();
		}


		// end initialize

		public function __construct(){
			$this->host = "localhost";
			$this->user = "root";
			$this->pass = "dmtruong.021";
			$this->db   = "coffee";
		}
		public function connect(){
			try{
				$this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->db, $this->user , $this->pass);
				$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}catch(PDOException $e){
				echo $e->getMessage();
				die;
			}
		}
		// USER
		public function createUser($user, $pass , $email, $phone){
			$qrcheck = "SELECT * From user WHERE username=:username";
			$check = $this->conn->prepare($qrcheck);
			$check->bindParam("username" , $user , PDO::PARAM_STR);
			$check->execute();
			if($check->rowCount()>=1){
				return false;
			}
			$query = "INSERT INTO user(username ,password, email, phone) VALUES(:username, :password, :email, :phone)";
			$stmt = $this->conn->prepare($query);
			$stmt->bindParam("username"  , $user , PDO::PARAM_STR);
			$stmt->bindParam("password"  , $pass , PDO::PARAM_STR);
			$stmt->bindParam("email"  , $email  , PDO::PARAM_STR);
			$stmt->bindParam("phone"  , $phone   , PDO::PARAM_STR);
			$stmt->execute();
			return true;
		}
		public function Login($user , $pass){
			$query = "SELECT * from user WHERE username=:username AND password=:password";
			$stmt = $this->conn->prepare($query);
			$stmt->bindParam("username" , $user , PDO::PARAM_STR);
			$stmt->bindParam("password" , $pass , PDO::PARAM_STR);
			$stmt->execute();
			if($stmt->rowCount() !=0){
				return true;
			}
			return false;
		}
		// End USER

		// MENU

		public function insertMenu($name , $price, $image){
			$qrcheck = "SELECT * FROM menu WHERE name=:name";
			$stmt = $this->conn->prepare($qrcheck);
			$stmt->bindParam("name" , $name, PDO::PARAM_STR);
			$stmt->execute();
			if($stmt->rowCount() ==0){
				$query = "INSERT INTO menu(name , price, image) VALUES(:name,:price,:image)";
				$stmt2 = $this->conn->prepare($query);
				$stmt2->bindParam("name" , $name, PDO::PARAM_STR);
				$stmt2->bindParam("price" , $price, PDO::PARAM_INT);
				$stmt2->bindParam("image" , $image, PDO::PARAM_STR);
				$stmt2->execute();
				return true;
			}
			return false;
		}
		public function fetchAllMenu(){
			$query = "SELECT * FROM menu";
			$stmt = $this->conn->prepare($query);
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
		public function deleteItemById($id){
			$query =  "DELETE FROM menu WHERE id=:id";
			$stmt = $this->conn->prepare($query);
			$stmt->bindParam("id" ,$id , PDO::PARAM_INT);
			$stmt->execute();
		}
		public function getURL($id){
			$query = "SELECT image from menu where id=:id";
			$stmt = $this->conn->prepare($query);
			$stmt->bindParam("id" , $id , PDO::PARAM_INT);
			$stmt->execute();
			return $stmt->fetch(PDO::FETCH_ASSOC);
		}
		// END MENU
	}
?>