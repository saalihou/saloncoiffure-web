<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SDC</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
</head>
<body>
  <nav class="navbar navbar-light mb-3" style="background-color: #E7E7E7;">
    <ul class="nav nav-pills">
      <a href="/" class="navbar-brand">NM Coiffure</a>
      <li class="nav-item">
        <a class="nav-link" href="#">Réservation</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Catalogue</a>
      </li>
      <?php if ($this->session->user): ?>
        <li class="nav-item">
          <a class="nav-link" href="/profil"><?=$this->session->user->prenoms?> (profil)</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/deconnexion">Déconnexion</a>
        </li>
      <?php else: ?>
        <li class="nav-item">
          <a class="nav-link" href="/connexion">Connexion</a>
        </li>
      <?php endif; ?>
      <?php if ($this->session->user && $this->session->user->role === 'ADMIN'): ?>
        <li class="nav-item">
          <a class="nav-link" href="/administration">Panneau d'administration</a>
        </li>
      <?php endif; ?>
    </ul>
  </nav>