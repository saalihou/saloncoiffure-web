<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administration extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('Utilisateur');
	}

	public function index()
	{
		$this->load->view('admin/index');
  }
  
  public function ajouterAdmin()
  {
    $this->load->library('form_validation');

		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		if ($this->form_validation->run())  {
			$email = $this->input->post('email');
			$status = $this->Utilisateur->majRole($email, 'admin');
      if (!$status) {
        $this->load->view('admin/ajout', ['error' => 'USER_NOT_FOUND']);
      } else {
        $this->load->view('admin/ajout', ['success' => true]);
      }
		} else {
			$this->load->view('admin/ajout');
		}
  }
}
