<?php $this->layout('layoutadmin', ['title' => 'Connexion membre']) ?>

<?php $this->start('main_content') ?>

<form class="form-horizontal" method="post" id="form_clients">
  <fieldset>

    <!-- Text input-->
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
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label" for="selectmultiple">Confirmez votre rôle</label>
      <div class="col-md-4">
      <select id="selectmultiple" name="selectmultiple" class="form-control">
      <option value="1">Editeur</option>
      <option value="2">Administrateur</option>
    </select>
    </div>

    <!-- Button (Double) -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="submit"></label>
      <div class="col-md-8">
        <button type="submit" class="btn btn-primary">Se connecter</button>
        <a href="<?=$this->url('Market_admin')?>" class="btn btn-warning btn-md couleur">Retour Accueil<span class="glyphicon glyphicon-user"></span></a>
      </div>
    </div>

  </fieldset>
</form>

<?php $this->stop('main_content') ?>