<?php

Interface UserInterface {
	public function getAllUsers();
	public function getUserById(int $id);
	public function getUserByUsername(string $username);
	public function addUser(string $name, string $username, string $password);
	public function removeUser(int $id);
}


class User implements UserInterface {
	private $db;

	function __construct(Database $db) {
		$this->db = $db;
	}

	public function getAllUsers() {
		return $this->db->select("SELECT id, username FROM users");
	}

	public function getUserById(int $id) {
		return $this->db->select("SELECT * FROM users WHERE id = :id", 
			["id" => $id]
			);
	}	

	public function getUserByUsername(string $username) {
		return $this->db->select("SELECT * FROM users WHERE username = :username", 
			["username" => $username]
			);
	}	

	public function addUser(string $name, string $username, string $password) {
		return $this->db->insert("INSERT INTO users (name, username, password) VALUES (:name, :username, :password)", 
			["name" => $name,
			"username" => $username . rand(1000,9999),
			"password" => password_hash($password, PASSWORD_DEFAULT)
			]);
	}

	public function removeUser(int $id) {
		return $this->db->remove("DELETE FROM users WHERE id = :id", ["id" => $id]);
	}
}