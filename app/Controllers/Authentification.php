<?php
namespace app\Controllers;

use CodeIgniter\Controller;

class Authentification extends Controller
{


	public function index()
	{
		return view('Authentification/login');

	}

}
