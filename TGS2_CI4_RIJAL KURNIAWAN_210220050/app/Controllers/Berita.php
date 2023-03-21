<?php
namespace App\Controllers;
use App\Models\BeritaModel;

class Berita extends BaseController
{
	/**
	* index function
	*/
	public function index()
	{
		//model initialize
		$Beritas = new BeritaModel();
		$Pager = \Config\Services::pager();
		
		$data = array(
			'beritas' => $Beritas->paginate(5, 'berita'),
			'pager' => $Beritas->pager
		);
		
		return view('berita', $data);
	}

	public function update($id)
	{
		$model = new BeritaModel(); // = include/koneksi file beritaModel
		$data['product'] = $model->getBeritaById($id)->getRow() ; // ambil function getBeeritaById
		echo view('edit_berita_view', $data);
	}
	public function edit()
	{
		$model = new BeritaModel();
        $id = $this->request->getPost('id');
        $data = array(
            'judul'  => $this->request->getPost('judul'),
            'tanggal' => $this->request->getPost('tanggal'),
			'isi' => $this->request->getPost('isi'),
        );
        $model->updateBerita($data, $id);
        return redirect()->to('/berita');
	}
	public function delete($id)
	{
		$model = new BeritaModel();
		$model->deleteBerita($data, $id);
		return redirect()->to('/berita');
	}
	public function create($id)
	{
		$model = new BeritaModel(); // = include/koneksi file BeritaModel
		$data['product'] = $model->getBeritaById($id)->getRow() ; // ambil function getBeritaById
		echo view('tambah_berita_view');
	}
	public function insert()
	{
		$model = new BeritaModel();
        $id = $this->request->getPost('id');
        $data = array(
            'judul' => $this->request->getPost('judul'),
            'tanggal' => $this->request->getPost('tanggal'),
			'isi' => $this->request->getPost('isi'),
        );
        $model->insert($data, $id);
        return redirect()->to('/berita');
	}

}		