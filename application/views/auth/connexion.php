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
          <form method="POST" action="<?=site_url('/connexion')?>">
            <div class="form-group">
              <label>Login</label>
              <input type="text" name="prenoms" class="form-control" />
            </div>
            <div class="form-group">
              <label>Mot de passe</label>
              <input type="text" name="nom" class="form-control" />
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