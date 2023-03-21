<?php
namespace App\Controllers;
use App\Models\KategoriModel;

class Kategori extends BaseController
{
	/**
	* index function
	*/
	public function index()
	{
		//model initialize
		$Kategoris = new KategoriModel();
		$Pager = \Config\Services::pager();
		
		$data = array(
			'kategoris' => $Kategoris->paginate(5, 'kategori'),
			'pager' => $Kategoris->pager
		);
		
		return view('kategori', $data);
	}
	public function update($id)
	{
		$model = new KategoriModel(); // = include/koneksi file KategoriModel
		$data['product'] = $model->getKategoriById($id)->getRow() ; // ambil function getKategoriById
		echo view('edit_kategori_view', $data);
	}
	public function edit()
	{
		$model = new KategoriModel();
        $id = $this->request->getPost('id_kategori');
        $data = array(
            'nama_kategori' => $this->request->getPost('nama_kategori'),
            'status' => $this->request->getPost('status'),
        );
        $model->updateKategori($data, $id);
        return redirect()->to('/kategori');
	}
	public function delete($id)
	{
		$model = new KategoriModel();
        $model->deleteKategori($data, $id);
        return redirect()->to('/kategori');
	}
	public function create($id)
	{
		$model = new KategoriModel(); // = include/koneksi file BeritaModel
		$data['product'] = $model->getKategoriById($id)->getRow() ; // ambil function getBeritaById
		echo view('tambah_kategori_view');
	}
	public function insert()
	{
		$model = new KategoriModel();
        $id = $this->request->getPost('id_kategori');
        $data = array(
            'nama_kategori' => $this->request->getPost('nama_kategori'),
            'status' => $this->request->getPost('status'),
        );
        $model->insert($data, $id);
        return redirect()->to('/kategori');
	}
}
		