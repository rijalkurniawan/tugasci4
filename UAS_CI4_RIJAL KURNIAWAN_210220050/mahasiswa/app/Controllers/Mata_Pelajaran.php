<?php
namespace App\Controllers;
use App\Models\Mata_PelajaranModel;

class Mata_Pelajaran extends BaseController
{
	function __construct(){
        $this->mata_pelajaran = new Mata_PelajaranModel();
    }
    public function index()
    {
        $data ['mata_pelajaran'] = $this->mata_pelajaran->getAll();

        return view('Mata_Pelajaran',$data);
    }
    
}