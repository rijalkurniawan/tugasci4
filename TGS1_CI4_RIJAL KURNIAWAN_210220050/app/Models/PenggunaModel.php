<?php namespace App\Models;

use CodeIgniter\Model;

class PenggunaModel extends Model
{
	/**
	* table namespace
	*/
	protected $table = "pengguna";
	
	/**
	* table field
	*/
	protected $allowedFields = [
		'email',
		'nama',
		'verifikasi'
	];
	
	public function getPengguna()
	{
		return $this->findAll();
	}
}
