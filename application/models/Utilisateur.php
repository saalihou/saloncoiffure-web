<?php

class Utilisateur extends CI_Model {
  public function __construct()
  {
    $this->load->database();
  }

  public function inscrire($prenoms, $nom, $email, $mdp) {
    $this->load->library('email');
    $this->email->from('noreply@nmcoiffure.com', 'NM Coiffure');
    $this->email->to($email);
    $this->email->subject('Vérification de mail');
    $this->email->message('Veuillez vérifier votre adresse mail en cliquant sur le lien ci après: ');
    $this->email->send();
  
    $this->db->insert('users', [
      'prenoms' => $prenoms,
      'nom' => $nom,
      'email' => $email,
      'mdp' =>  password_hash($mdp, PASSWORD_BCRYPT),
      'role' => NULL,
      'etat' => 'NON_VERIFIE'
    ]);
  }
}