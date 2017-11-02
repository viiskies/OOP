<?php

Interface GameInterface {
	// store game result...
	// get all.
	// get my
	// get top winners 5 $$$
}

class Game implements GameInterface {
	private $db;

	function __construct(Database $db) {
		$this->db = $db;
	}

	// store result 

	//
}