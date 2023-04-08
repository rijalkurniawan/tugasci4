<?php namespace App\Models;

use CodeIgniter\Model;

class DosenModel extends Model
{
	/**
	* table namespace
	*/
	protected $table = "dosen";
	
	/**
	* table field
	*/
	protected $allowedFields = [
		'nama_dosen',
		'email_dosen',
        'nip',
        'jabatan',
        'mata_kuliah'
	];
	
	public function getDosen()
	{
		return $this->findAll();
	}
	public function getDosenById($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id_dosen' => $id]);
        }   
    }
	public function insertDosen($data, $id)
    {
        $query = $this->db->table($this->table)->insert($data, array('id_dosen' => $id));
        return $query;
    }

	 public function updateDosen($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('id_dosen' => $id));
        return $query;
    }
	
	public function deleteDosen($data, $id)
    {
        $query = $this->db->table($this->table)->delete(array('id_dosen' => $id));
        return $query;
    }
}
