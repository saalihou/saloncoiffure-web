<?php $this->load->view('header'); ?>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-sm-10 col-md-8 col-lg-6">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Informations personnelles</h4>
          <?php if (validation_errors() && $formulaire === 'infos_persos'): ?>
            <div class="alert alert-danger" role="alert">
              <?=validation_errors();?>
            </div>
          <?php endif; ?>
          <form method="POST" action="<?=site_url('/profil')?>">
            <div class="form-group">
              <label>Prénoms</label>
              <input type="text" name="prenoms" class="form-control" value="<?=set_value('prenoms') ?: $this->session->user->prenoms?>" />
            </div>
            <div class="form-group">
              <label>Nom</label>
              <input type="text" name="nom" class="form-control" value="<?=set_value('nom') ?: $this->session->user->nom?>" />
            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>
          </form>
        </div>
      </div>
    </div>
    <div class="col-sm-10 col-md-8 col-lg-6">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Mot de passe</h4>
          <?php if (validation_errors() && $formulaire === 'mot_de_passe'): ?>
            <div class="alert alert-danger" role="alert">
              <?=validation_errors();?>
            </div>
          <?php endif; ?>
          <form method="POST" action="<?=site_url('/profil')?>">
            <div class="form-group">
              <label>Mot de passe actuel</label>
              <input type="password" name="mdp" class="form-control" />
            </div>
            <div class="form-group">
              <label>Nouveau mot de passe</label>
              <input type="password" name="nouveauMdp" class="form-control" />
            </div>
            <div class="form-group">
              <label>Confirmation du nouveau mot de passe</label>
              <input type="password" name="nouveauMdpConfirm" class="form-control" />
            </div>
            <button type="submit" class="btn btn-primary">Changer mot de passe</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $this->load->view('footer'); ?>