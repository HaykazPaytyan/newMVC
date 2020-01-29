<?php 

class HomeModel
{
	private $db;

	public function __construct(PDO $db)
	{
		$this->db = $db;
	}

	public function showTables()
	{
		$stmt = $this->db->query('SELECT * FROM `images`');
		$row =  $stmt->fetchAll();
		return $row;
	}
}

?>