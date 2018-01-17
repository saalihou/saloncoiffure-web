<?php

class Utilisateur extends CI_Model {
  public function __construct()
  {
    $this->load->database();
  }

  public function inscrire($prenoms, $nom, $email, $mdp) {
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