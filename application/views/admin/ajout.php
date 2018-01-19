<?php $this->load->view('header'); ?>
<div class="container">
  <h1>Ajouter un administrateur</h1>
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Nouvel administrateur</h4>
      <form method="POST" action="<?=site_url('/administration/ajout')?>">
        <?php if (validation_errors()): ?>
          <div class="alert alert-danger" role="alert">
            <?=validation_errors();?>
          </div>
        <?php endif; ?>
        <?php if (isset($error) && $error === 'USER_NOT_FOUND'): ?>
          <div class="alert alert-danger" role="alert">
            Utilisateur non existant
          </div>
        <?php endif; ?>
        <?php if (isset($success)): ?>
          <div class="alert alert-success" role="alert">
            Administrateur ajouté avec succès
          </div>
        <?php endif; ?>
        <input type="text" name="email" class="form-control" placeholder="Email de l'administrateur" />
        <button type="submit" class="mt-2 btn btn-primary">Ajouter</button>
      </form>
    </div>
  </div>
</div>
<?php $this->load->view('footer'); ?>