<?php $this->load->view('header'); ?>
<div class="container">
  <h1 class="text-center">Panneau d'administration</h1>
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <a href="/administration/ajout" class="btn btn-lg btn-block btn-primary">Ajouter administrateur</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <div class="card-body">
          <button class="btn btn-lg btn-block btn-primary">Gérer catalogue</button>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $this->load->view('footer'); ?>