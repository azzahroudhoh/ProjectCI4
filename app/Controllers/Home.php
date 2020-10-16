<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}

	//--------------------------------------------------------------------
	public function show(){
		$data['nama']= 'Azzah Roudhoh';
		$data['npm']= '1857051001';
		$data['jurusan']= 'Ilmu Komputer';
		echo view('mahasiswa/header');
		echo view('mahasiswa/index', $data);
		echo view('mahasiswa/footer');
	}
}