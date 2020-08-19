<?php

namespace src\model;

use libs\system\Model;

class ClientmorRepository extends Model
{

	/**
	 * Methods with DQL (Doctrine Query Language) 
	 */
	public function __construct()
	{
		parent::__construct();
	}
	public function getClientmor($id)
	{
		if ($this->db != null) {
			return $this->db->getRepository('Client')->find(array('id' => $id));
		}
	}

	//Insertion de client moral dans la base de donnee

	public function addCientmoral($clientmoral)

	{
		$this->db->persist($clientmoral);
		$this->db->flush();

		return $clientmoral->getId();
	}
}
