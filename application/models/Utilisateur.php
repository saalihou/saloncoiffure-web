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

  public function connexion($email, $mdp) {
    $user = $this->db->get_where('users', ['email' => $email])->row();
    if (!$user) {
      return false;
    }
    if (!password_verify($mdp, $user->mdp)) {
      return false;
    }
    $this->session->user = $user;
    return true;
  }

  public function majInfosPersos($prenoms, $nom) {
    $this->db->where('email', $this->session->user->email)
      ->set('prenoms', $prenoms)
      ->set('nom', $nom)
      ->update('users');
    $this->session->user->prenoms = $prenoms;
    $this->session->user->nom = $nom;
  }
}