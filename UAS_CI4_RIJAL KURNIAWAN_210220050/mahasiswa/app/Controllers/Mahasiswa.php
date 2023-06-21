<?php
namespace App\Controllers;
use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
	function __construct(){
        $this->mahasiswa = new MahasiswaModel();
    }
    public function index()
    {
        $data ['mahasiswa'] = $this->mahasiswa->getAll();

        return view('Mahasiswa',$data);
    }
    
}