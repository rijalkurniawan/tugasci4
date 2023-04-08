<?php
namespace App\Controllers;
use App\Models\StaffModel;

class Staff extends BaseController
{
	/**
	* index function
	*/
	public function index()
	{
		//model initialize
		$Staffs = new StaffModel();
		$Pager = \Config\Services::pager();
		
		$data = array(
			'staffs' => $Staffs->paginate(5, 'staff'),
			'pager' => $Staffs->pager
		);
		
		return view('staff', $data);
	}

	public function update($id)
	{
		$model = new StaffModel(); // = include/koneksi file beritaModel
		$data['product'] = $model->getStaffById($id)->getRow() ; // ambil function getBeeritaById
		echo view('edit_staff_view', $data);
	}
	public function edit()
	{
		$model = new StaffModel();
        $id = $this->request->getPost('id_staff');
        $data = array(
            'nama_staff'  => $this->request->getPost('nama_staff'),
            'email_staff' => $this->request->getPost('email_staff'),
			
        );
        $model->updateStaff($data, $id);
        return redirect()->to('/staff');
	}
	public function deleteStaff($id)
	{
		$model = new StaffModel();
		$model->deleteStaff($data, $id);
		return redirect()->to('/staff');
	}
	public function create($id)
	{
		$model = new StaffModel(); // = include/koneksi file BeritaModel
		$data['product'] = $model->getStaffById($id)->getRow() ; // ambil function getBeritaById
		echo view('tambah_staff_view');
	}
	public function insert()
	{
		$model = new StaffModel();
        $id = $this->request->getPost('id_staff');
        $data = array(
            'nama_staff'  => $this->request->getPost('nama_staff'),
            'email_staff' => $this->request->getPost('email_staff'),
        );
        $model->insert($data, $id);
        return redirect()->to('/staff');
	}

}		