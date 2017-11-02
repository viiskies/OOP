<?php

Interface GameInterface {
    public function getAllGames();
	
	// Get user games by the user id
    public function getUserGames(int $id);
	
	// Get the best players
    public function getTopWinners(int $counts);
	
	// Get players who played the most
    // public function getTopPlayers(int $count);
}

class Game implements GameInterface {
	private $db;

	function __construct(Database $db) {
		$this->db = $db;
	}

	public function getAllGames() {
		return $this->db->select("SELECT * FROM games");
	}	

	public function getUserGames(int $id) {
		return $this->db->select("SELECT games.* FROM games JOIN users ON users.username = games.username WHERE users.id = :id", 
			["id" => $id]
		);
	}

	public function getTopWinners(int $counts) {
		return $this->db->select("SELECT * FROM `games` ORDER BY `winings` DESC LIMIT :counts", 
			["counts" => $counts]
		);
	}

	//
}