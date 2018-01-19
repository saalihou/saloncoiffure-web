<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('Utilisateur');
	}

	public function index()
	{
		$this->load->library('form_validation');
		
		if ($this->input->post('prenoms')) {
			$this->form_validation->set_rules('prenoms', 'Prénom', 'required|min_length[2]');
			$this->form_validation->set_rules('nom', 'Nom', 'required|min_length[2]');
			if ($this->form_validation->run())  {
				$prenoms = $this->input->post('prenoms');
				$nom = $this->input->post('nom');
				$this->Utilisateur->majInfosPersos($prenoms, $nom);
			}
			$this->load->view('profil/index', ['formulaire' => 'infos_persos']);
		} else if ($this->input->post('mdp')) {

		} else {
			$this->load->view('profil/index', ['formulaire' => NULL]);
		}
		// $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
		// $this->form_validation->set_rules('mdp', 'Mot de passe', 'required|min_length[6]');
		// $this->form_validation->set_rules('confirm_mdp', 'Confirmation du mot de passe', 'required|matches[mdp]');
	}
}
