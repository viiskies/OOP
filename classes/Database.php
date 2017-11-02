<?php

class Database {

	private $hostname = "localhost";
	private $username = "root";
	private $password = "";
	private $database = 'dices';

	private $connection;

	function __construct() {
		try {
			$this->connection = new PDO("mysql:host=" . $this->hostname . ";dbname=" . $this->database . "",  $this->username, $this->password);
			$this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			echo "connection";


		} catch(PDOException $e) {
			echo $e->getMessage();
		}
	}

	public function select(string $sql, array $param = []) : array { 
		// SELECT * FROM users WHERE :id 
		$statement = $this->connection->prepare($sql);
		// example $param = ["id" => 666];
		$statement->execute($param);
		return $statement->fetchAll(PDO::FETCH_ASSOC);
	}

	function __destruct() {
		$this->connection = null;
	}

}