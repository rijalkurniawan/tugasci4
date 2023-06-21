<?php
namespace App\Controllers;
use App\Models\KelulusanModel;

class Kelulusan extends BaseController
{
	function __construct(){
        $this->kelulusan = new KelulusanModel();
    }
    public function index()
    {
        $data ['kelulusan'] = $this->kelulusan->getAll();

        return view('Kelulusan',$data);
    }
    
}