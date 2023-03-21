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
	public function getDaerahById($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id_daerah' => $id]);
        }   
    }
	public function insertDaerah($data, $id)
    {
        $query = $this->db->table($this->table)->insert($data, array('id_daerah' => $id));
        return $query;
    }

	 public function updateDaerah($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('id_daerah' => $id));
        return $query;
    }
	
	public function deleteDaerah($data, $id)
    {
        $query = $this->db->table($this->table)->delete(array('id_daerah' => $id));
        return $query;
    }
}
