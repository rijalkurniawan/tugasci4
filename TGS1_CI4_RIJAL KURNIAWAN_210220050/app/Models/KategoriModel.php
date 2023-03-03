<?php namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
	/**
	* table namespace
	*/
	protected $table = "kategori";
	
	/**
	* table field
	*/
	protected $allowedFields = [
		'nama_kategori',
		'status'
	];
	
	public function getKategori()
	{
		return $this->findAll();
	}
}
