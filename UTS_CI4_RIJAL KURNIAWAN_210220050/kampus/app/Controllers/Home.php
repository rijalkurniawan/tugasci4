<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
       $data=[
            'title' => 'Home',
            'isi' => 'v_home'
       ];
       echo view('layout/v_wrapper',$data);
    }
    public function mahasiswa()
    {
       $data=[
            'title' => 'Mahasiswa',
            'isi' => 'mahasiswa'
       ];
       echo view('layout/v_wrapper',$data);
    }
    public function dosen()
    {
       $data=[
            'title' => 'Dosen',
            'isi' => 'dosen'
       ];
       echo view('layout/v_wrapper',$data);
    }
    public function tambah_mahasiswa_view()
    {
       $data=[
            'title' => 'Mahasiswa',
            'isi' => 'tambah_mahasiswa_view'
       ];
       echo view('layout/v_wrapper',$data);
    }
    public function tambah_dosen_view()
    {
       $data=[
            'title' => 'Dosen',
            'isi' => 'tambah_dosen_view'
       ];
       echo view('layout/v_wrapper',$data);
    }
    
}
