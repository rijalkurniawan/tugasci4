<?php namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
	/**
	* table namespace
	*/
	protected $table = "mahasiswa";
	
	/**
	* table field
	*/
	protected $allowedFields = [
		'nama_mahasiswa',
		'email_mahasiswa',
		'nim',
		'jurusan',
		'semester'
	];
	
	public function getMahasiswa()
	{
		return $this->findAll();
	}


	public function getMahasiswaById($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id_mahasiswa' => $id]);
        }   
    }
	public function insertMahasiswa($data, $id)
    {
        $query = $this->db->table($this->table)->insert($data, array('id_mahasiswa' => $id));
        return $query;
    }
	 public function updateMahasiswa($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('id_mahasiswa' => $id));
        return $query;
    }
	
	public function deleteMahasiswa($data, $id)
    {
        $query = $this->db->table($this->table)->delete(array('id_mahasiswa' => $id));
        return $query;
    }
}