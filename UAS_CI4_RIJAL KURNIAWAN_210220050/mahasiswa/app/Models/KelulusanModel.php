<?php namespace App\Models;

use CodeIgniter\Model;

class KelulusanModel extends Model
{
    public function getAll()
    {
        return $this->db->table('kelulusan')
 
        ->get()->getResultArray();
    
    }
}