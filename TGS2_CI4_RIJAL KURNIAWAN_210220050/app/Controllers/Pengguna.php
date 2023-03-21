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
			'penggunas' => $Penggunas->paginate(5, 'pengguna'),
			'pager' => $Penggunas->pager
		);
		
		return view('pengguna', $data);
	}
	public function update($id)
	{
		$model = new PenggunaModel(); // = include/koneksi file PenggunaModel
		$data['product'] = $model->getPenggunaById($id)->getRow() ; // ambil function getKategoriById
		echo view('edit_pengguna_view', $data);
	}
	public function edit()
	{
		$model = new PenggunaModel();
        $id = $this->request->getPost('id_pengguna');
        $data = array(
            'email' => $this->request->getPost('email'),
            'nama' => $this->request->getPost('nama'),
			'verifikasi' => $this->request->getPost('verifikasi'),
        );
        $model->updatePengguna($data, $id);
        return redirect()->to('/pengguna');
	}
	public function delete($id)
	{
		$model = new PenggunaModel();
        $model->deletePengguna($data, $id);
        return redirect()->to('/pengguna');
	}
	public function create($id)
	{
		$model = new PenggunaModel(); // = include/koneksi file PenggunaModel
		$data['product'] = $model->getPenggunaById($id)->getRow() ; // ambil function getKategoriById
		echo view('tambah_pengguna_view');
	}
	public function insert()
	{
		$model = new PenggunaModel();
        $id = $this->request->getPost('id_pengguna');
        $data = array(
            'email' => $this->request->getPost('email'),
            'nama' => $this->request->getPost('nama'),
			'verifikasi' => $this->request->getPost('verifikasi'),
        );
        $model->insert($data, $id);
        return redirect()->to('/pengguna');
	}
}
		