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
			'daeras' => $Daeras->paginate(5, 'daerah'),
			'pager' => $Daeras->pager
		);
		
		return view('daerah', $data);
	}

	public function update($id)
	{
		$model = new DaerahModel(); // = include/koneksi file DaerahModel
		$data['product'] = $model->getDaerahById($id)->getRow() ; // ambil function getDaerahById
		echo view('edit_daerah_view', $data);
	}
	public function edit()
	{
		$model = new DaerahModel();
        $id = $this->request->getPost('id_daerah');
        $data = array(
            'nama_daerah'  => $this->request->getPost('nama_daerah'),
            'status' => $this->request->getPost('status'),
        );
        $model->updateDaerah($data, $id);
        return redirect()->to('/daerah');
	}
	public function delete($id)
	{
		$model = new DaerahModel();
        $model->deleteDaerah($data, $id);
        return redirect()->to('/daerah');
	}
	public function create($id)
	{
		$model = new DaerahModel(); // = include/koneksi file BeritaModel
		$data['product'] = $model->getDaerahById($id)->getRow() ; // ambil function getBeritaById
		echo view('tambah_daerah_view');
	}
	public function insert()
	{
		$model = new DaerahModel();
        $id = $this->request->getPost('id_daerah');
        $data = array(
            'nama_daerah' => $this->request->getPost('nama_daerah'),
            'status' => $this->request->getPost('status'),
        );
        $model->insert($data, $id);
        return redirect()->to('/daerah');
	}

}		
		