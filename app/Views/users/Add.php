<?php $this->layout('layoutshop', ['title' => 'Créer mon compte']) ?>

<?php $this->start('main_content') ?>

  <form class="form-horizontal" method="post" id="form_clients" enctype="multipart/form-data">
<fieldset>

<div class="form-group">
  <label class="col-md-4 control-label" for="lastname">Nom</label>
  <div class="col-md-4">
  <input id="lastname" name="lastname" type="text" placeholder="Veuillez saisir votre nom" class="form-control input-md">
  </div><br>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="firstname">Prénom</label>
  <div class="col-md-4">
  <input id="firstname" name="firstname" type="text" placeholder="Veuillez saisir votre prénom" class="form-control input-md">
  </div><br>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>
  <div class="col-md-4">
  <input id="email" name="email" type="email" placeholder="Veuillez saisir votre adresse email" class="form-control input-md">
  </div><br>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="password">Mot de passe</label>
  <div class="col-md-4">
  <input id="password" name="password" type="password" placeholder="Veuillez entrer votre mot de passe" class="form-control input-md">
  </div><br>
</div>

 <!-- Select Multiple -->
<div class="form-group">
  <label class="col-md-4 control-label" for="role">Rôle</label>
  <div class="col-md-4">
    <select id="role" name="role" class="form-control">
      <option value="Editor">Editeur</option>
      <option value="Administrator">Administrateur</option>
    </select>
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-8">
    <button type="submit" class="btn btn-primary">Envoyer le formulaire</button>
    <button type="submit" class="btn btn-warning"><a href="<?=$this->url('Market_admin')?>">Retour Accueil</a></button>
  </div>
</div>

</fieldset>
</form>


<?php $this->stop('main_content') ?>