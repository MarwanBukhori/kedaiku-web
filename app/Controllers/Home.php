<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		
		
/* 		$all_pekan = [
			[
				'nama' => 'Seremban',
				'gambar' => 'https://images.unsplash.com/photo-1583159075864-4a3beb6fd55d?ixid=MXwxMjA3fDB8MHxzZWFyY2h8M3x8bmVnZXJpJTIwc2VtYmlsYW58ZW58MHx8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60', 
				'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).'
			],[
				'nama' => 'Gemas',
				'gambar' => 'https://images.unsplash.com/photo-1615870795127-1c13f1d92997?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTB8fG5lZ2VyaSUyMHNlbWJpbGFufGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60', 
				'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).'
		
			],[
				'nama' => 'Kuala Pilah',
				'gambar' => 'https://images.unsplash.com/photo-1579232323293-4af4f9bb8dcf?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTN8fG5lZ2VyaSUyMHNlbWJpbGFufGVufDB8fDB8&auto=format&fit=crop&w=500&q=60', 
				'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).'
		
			],[
				'nama' => 'Juaseh',
				'gambar' => 'https://images.unsplash.com/photo-1593495504876-81404328ebf5?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTF8fG5lZ2VyaSUyMHNlbWJpbGFufGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60', 
				'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).'
		
			],[
				'nama' => 'Rembau',
				'gambar' => 'https://images.unsplash.com/photo-1593924689241-1b78c38f0071?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxzZWFyY2h8MjF8fG5lZ2VyaSUyMHNlbWJpbGFufGVufDB8fDB8&auto=format&fit=crop&w=500&q=60', 
				'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).'
		
			],[
				'nama' => 'Port Dickson',
				'gambar' => 'https://images.unsplash.com/photo-1604493691538-8281c0d03680?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxzZWFyY2h8Mjl8fG5lZ2VyaSUyMHNlbWJpbGFufGVufDB8fDB8&auto=format&fit=crop&w=500&q=60', 
				'description' => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).'
		
			]
			
		]; */
		$db = db_connect();
		$result = $db -> query('SELECT * FROM gambar ORDER BY nama desc');
		$all_pekan = $result -> getResult();

		#debug and die
		#dd( $all_pekan );

		return view('homepage', [ 'all_pekan' => $all_pekan] ); 
	}

	function hello(){
		echo "<h1>Hello.....</h1>";
	}

	function welcome(){
		echo "<h1>Welcome</h1>";
	}

}
