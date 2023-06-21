<?php namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    public function getAll()
    {
        return $this->db->table('mahasiswa')
 
        ->get()->getResultArray();
    
    }
}