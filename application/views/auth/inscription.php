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
          <h4 class="card-title">Inscription</h4>
          <?php if (validation_errors()): ?>
            <div class="alert alert-danger" role="alert">
              <?=validation_errors();?>
            </div>
          <?php endif; ?>
          <form method="POST" action="<?=site_url('/inscription')?>">
            <div class="form-group">
              <label>Prénom</label>
              <input type="text" name="prenoms" class="form-control" placeholder="Votre prénom" value="<?=set_value('prenoms');?>" />
            </div>
            <div class="form-group">
              <label>Nom</label>
              <input type="text" name="nom" class="form-control" placeholder="Votre nom de famille" value="<?=set_value('nom');?>" />
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="text" name="email" class="form-control" placeholder="Votre addresse email" value="<?=set_value('email');?>" />
            </div>
            <div class="form-group">
              <label>Mot de passe</label>
              <input type="password" name="mdp" class="form-control" />
            </div>
            <div class="form-group">
              <label>Confirmation du mot de passe</label>
              <input type="password" name="confirm_mdp" class="form-control" />
            </div>
            <button type="submit" class="btn btn-primary">S'inscrire</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $this->load->view('footer'); ?>