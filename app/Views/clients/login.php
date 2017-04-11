<?php $this->layout('layout', ['title' => 'Connexion']) ?>

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
      <input id="password" name="password" type="text" placeholder="Veuillez entrer votre mot de passe" class="form-control input-md">
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label" for="submit"></label>
      <div class="col-md-4">
        <button type="submit" class="btn btn-primary">Se connecter</button>
        <button type="submit" class="btn btn-warning">Retour Accueil</button>
      </div>
    </div>

  </fieldset>
</form>

<?php $this->stop('main_content') ?>