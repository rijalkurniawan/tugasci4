<?php namespace App\Models;

use CodeIgniter\Model;

class Mata_PelajaranModel extends Model
{
    public function getAll()
    {
        return $this->db->table('mata_pelajaran')
        
        ->get()->getResultArray();
    
    }
}