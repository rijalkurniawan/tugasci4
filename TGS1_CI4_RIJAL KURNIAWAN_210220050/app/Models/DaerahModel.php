<?php namespace App\Models;

use CodeIgniter\Model;

class DaerahModel extends Model
{
	/**
	* table namespace
	*/
	protected $table = "daerah";
	
	/**
	* table field
	*/
	protected $allowedFields = [
		'nama_daerah',
		'status'
	];
	
	public function getDaerah()
	{
		return $this->findAll();
	}
}
