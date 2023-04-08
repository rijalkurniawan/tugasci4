<?php
namespace App\Controllers;
use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
	/**
	* index function
	*/
	public function index()
	{
		//model initialize
		$Mahasiswas = new MahasiswaModel();
		$Pager = \Config\Services::pager();
		
		$data = array(
			'mahasiswas' => $Mahasiswas->paginate(5, 'mahasiswa'),
			'pager' => $Mahasiswas->pager
		);
		
		return view('mahasiswa', $data);
	}

	public function update($id)
	{
		$model = new MahasiswaModel(); // = include/koneksi file beritaModel
		$data['product'] = $model->getMahasiswaById($id)->getRow() ; // ambil function getBeeritaById
		echo view('edit_mahasiswa_view', $data);
	}
	public function edit()
	{
		$model = new MahasiswaModel();
        $id = $this->request->getPost('id_mahasiswa');
        $data = array(
            'nama_mahasiswa'  => $this->request->getPost('nama_mahasiswa'),
            'email_mahasiswa' => $this->request->getPost('email_mahasiswa'),
			'nim' => $this->request->getPost('nim'),
			'jurusan' => $this->request->getPost('jurusan'),
			'semester' => $this->request->getPost('semester'),
        );
        $model->updateMahasiswa($data, $id);
        return redirect()->to('/mahasiswa');
	}
	public function delete($id)
	{
		$model = new MahasiswaModel();
		$model->deleteMahasiswa($data, $id);
		return redirect()->to('/mahasiswa');
	}
	public function create($id)
	{
		$model = new MahasiswaModel(); // = include/koneksi file BeritaModel
		$data['product'] = $model->getMahasiswaById($id)->getRow() ; // ambil function getBeritaById
		echo view('tambah_mahasiswa_view');
	}
	public function insert()
	{
		$model = new MahasiswaModel();
        $id = $this->request->getPost('id_mahasiswa');
        $data = array(
            'nama_mahasiswa'  => $this->request->getPost('nama_mahasiswa'),
            'email_mahasiswa' => $this->request->getPost('email_mahasiswa'),
			'nim' => $this->request->getPost('nim'),
			'jurusan' => $this->request->getPost('jurusan'),
			'semester' => $this->request->getPost('semester'),
        );
        $model->insert($data, $id);
        return redirect()->to('/mahasiswa');
	}

}		