<?php $this->load->view('header'); ?>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-sm-10 col-md-8 col-lg-6">
      <div class="row py-3">
        <div class="col">
          <button class="btn btn-primary btn-lg btn-block">Facebook</button>
        </div>
        <div class="col">
          <button class="btn btn-danger btn-lg btn-block">Google+</button>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Connexion</h4>
          <?php if (isset($error)): ?>
            <div class="alert alert-danger" role="alert">
              <?php if ($error === 'INVALID_LOGIN'): ?>
                Combinaison identifiant/mot de passe invalide
              <?php endif; ?>
            </div>
          <?php endif; ?>
          <form method="POST" action="<?=site_url('/connexion')?>">
            <div class="form-group">
              <label>Login</label>
              <input type="text" name="email" class="form-control" />
            </div>
            <div class="form-group">
              <label>Mot de passe</label>
              <input type="password" name="mdp" class="form-control" />
            </div>
            <a href="#">Mot de passe oublié</a>
            <br />
            <button type="submit" class="btn btn-primary">Se Connecter</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $this->load->view('footer'); ?>