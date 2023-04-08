<?php
namespace App\Controllers;
use App\Models\DosenModel;

class Dosen extends BaseController
{
	/**
	* index function
	*/
	public function index()
	{
		//model initialize
		$Dosens = new DosenModel();
		$Pager = \Config\Services::pager();
		
		$data = array(
			'dosens' => $Dosens->paginate(5, 'dosen'),
			'pager' => $Dosen->pager
		);
		
		return view('dosen', $data);
	}
	public function update($id)
	{
		$model = new DosenModel(); // = include/koneksi file DaerahModel
		$data['product'] = $model->getDosenById($id)->getRow() ; // ambil function getDaerahById
		echo view('edit_dosen_view', $data);
	}
	public function edit()
	{
		$model = new DosenModel();
        $id = $this->request->getPost('id_dosen');
        $data = array(
            'nama_dosen'  => $this->request->getPost('nama_dosen'),
			'email_dosen'  => $this->request->getPost('email_dosen'),
            'nip' => $this->request->getPost('nip'),
			'jabatan'  => $this->request->getPost('jabatan'),
			'mata_kuliah'  => $this->request->getPost('mata_kuliah'),
        );
        $model->updateDosen($data, $id);
        return redirect()->to('/dosen');
	}
	public function delete($id)
	{
		$model = new DosenModel();
        $model->deleteDosen($data, $id);
        return redirect()->to('/dosen');
	}
	public function create($id)
	{
		$model = new DosenModel(); // = include/koneksi file BeritaModel
		$data['product'] = $model->getDosenById($id)->getRow() ; // ambil function getBeritaById
		echo view('tambah_dosen_view');
	}
	public function insert()
	{
		$model = new DosenModel();
        $id = $this->request->getPost('id_dosen');
        $data = array(
            'nama_dosen'  => $this->request->getPost('nama_dosen'),
			'email_dosen'  => $this->request->getPost('email_dosen'),
            'nip' => $this->request->getPost('nip'),
			'jabatan'  => $this->request->getPost('jabatan'),
			'mata_kuliah'  => $this->request->getPost('mata_kuliah'),
        );
        $model->insert($data, $id);
        return redirect()->to('/dosen');
	}
}		
		