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


	public function getBeritaById($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id' => $id]);
        }   
    }
	public function insertBerita($data, $id)
    {
        $query = $this->db->table($this->table)->insert($data, array('id' => $id));
        return $query;
    }
	 public function updateBerita($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('id' => $id));
        return $query;
    }
	
	public function deleteBerita($data, $id)
    {
        $query = $this->db->table($this->table)->delete(array('id' => $id));
        return $query;
    }
}