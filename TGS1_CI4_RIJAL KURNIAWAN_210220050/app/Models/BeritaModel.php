<?php namespace App\Models;

use CodeIgniter\Model;

class BeritaModel extends Model
{
	/**
	* table namespace
	*/
	protected $table = "berita";
	
	/**
	* table field
	*/
	protected $allowedFields = [
		'judul',
		'tanggal',
		'isi'
	];
	
	public function getBerita()
	{
		return $this->findAll();
	}
}
