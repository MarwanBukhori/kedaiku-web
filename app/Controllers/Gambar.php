<?php

namespace App\Controllers;

class Gambar extends BaseController
{
	public function index()
	{
		#echo "<h1>Kita akan keluarkan senarai</h1>";
		$gambar_model = new \App\Models\GambarModel();
		$gambar = $gambar_model->findAll();
		
		

		return view('admin/listing',['gambar'=> $gambar]);
	}

	function edit(){
		echo "<h1>Borang untuk edit di sini</h1>";
	}

	function add(){
		helper('form');
		return view('admin/add');
		
	}
	
	//save data dari add new form
	function save_new(){	
		$gambar_model = new \App\Models\GambarModel();
		

		$name = $this->request->getPost('nama');
		$keterangan = $this->request->getPost('keterangan');

		$data = [
			'nama' => $this->request->getPost('nama'),
			'keterangan' => $this->request ->getPost('keterangan')
		];
		

		$file = $this->request->getFile('nama_fail');
		// Grab the file by name given in HTML form
	if ($file)
	{

    // Generate a new secure name
    $nama_fail = $file->getRandomName();

    // Move the file to it's new home
    $file->move('img/', $nama_fail);
	$data['nama_fail'] = $nama_fail;

    }

	$gambar_model->insert($data);
		#echo "<h1>Hello......saya hensem</h1>";
		
	}

}