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
		echo "<h1>Borang untuk add di sini</h1>";
	}

}
