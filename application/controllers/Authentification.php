<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentification extends CI_Controller {

	public function inscription()
	{
		$this->load->view('auth/inscription');
	}

	public function connexion()
	{
		$this->load->view('auth/connexion');
	}
}
