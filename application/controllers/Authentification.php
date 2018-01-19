<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Authentification extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('Utilisateur');
	}

	public function inscription()
	{
		$this->load->library('form_validation');
	
		$this->form_validation->set_rules('prenoms', 'Prénom', 'required|min_length[2]');
		$this->form_validation->set_rules('nom', 'Nom', 'required|min_length[2]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('mdp', 'Mot de passe', 'required|min_length[6]');
		$this->form_validation->set_rules('confirm_mdp', 'Confirmation du mot de passe', 'required|matches[mdp]');
		if ($this->form_validation->run())  {
			$prenoms = $this->input->post('prenoms');
			$nom = $this->input->post('nom');
			$email = $this->input->post('email');
			$mdp = $this->input->post('mdp');
			$this->Utilisateur->inscrire($prenoms, $nom, $email, $mdp);
			redirect('/connexion');
		} else {
			$this->load->view('auth/inscription');
		}
	}

	public function connexion()
	{
		if ($this->input->method() === 'get') {
			$this->load->view('auth/connexion');
			return;
		}
		$email = $this->input->post('email');
		$mdp = $this->input->post('mdp');
		$status = $this->Utilisateur->connexion($email, $mdp);
		if (!$status) {
			$this->load->view('auth/connexion', ['error' => 'INVALID_LOGIN']);
		} else {
			redirect('/');
		}
	}

	public function deconnexion()
	{
		$this->session->sess_destroy();
		redirect('/');
	}
}
