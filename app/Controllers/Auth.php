<?php
namespace app\Controllers;

use CodeIgniter\Controller;

class Auth extends Controller
{


	public function index()
	{
		return view('Auth/login');

	}

	public function register()
	{
		return view('Auth/register');

	}
        public function save()
	{
                echo 'Bonjour';

	}

}
