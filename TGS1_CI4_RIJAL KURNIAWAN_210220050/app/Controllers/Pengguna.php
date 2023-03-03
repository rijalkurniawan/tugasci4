<?php
namespace App\Controllers;
use App\Models\PenggunaModel;

class Pengguna extends BaseController
{
	/**
	* index function
	*/
	public function index()
	{
		//model initialize
		$Penggunas = new PenggunaModel();
		$Pager = \Config\Services::pager();
		
		$data = array(
			'penggunas' => $Penggunas->paginate(2, 'pengguna'),
			'pager' => $Penggunas->pager
		);
		
		return view('pengguna', $data);
	}
}
		