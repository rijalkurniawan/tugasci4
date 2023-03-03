<?php
namespace App\Controllers;
use App\Models\DaerahModel;

class Daerah extends BaseController
{
	/**
	* index function
	*/
	public function index()
	{
		//model initialize
		$Daeras = new DaerahModel();
		$Pager = \Config\Services::pager();
		
		$data = array(
			'daeras' => $Daeras->paginate(2, 'daerah'),
			'pager' => $Daeras->pager
		);
		
		return view('daerah', $data);
	}
}
		