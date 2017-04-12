<?php $this->layout('layoutclient', ['title' => 'Créer mon compte']) ?>

<?php $this->start('main_content') ?>

  <form class="form-horizontal" method="post" id="form_clients" enctype="multipart/form-data">
<fieldset>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="pseudo">Pseudo</label>  
  <div class="col-md-4">
  <input id="pseudo" name="pseudo" type="text" placeholder="Veuillez saisir votre pseudo" class="form-control input-md">
  </div><br>
</div>

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
  <input id="password" name="password" type="text" placeholder="Veuillez entrer votre mot de passe" class="form-control input-md">
  </div><br>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="phone">Téléphone portable</label>
  <div class="col-md-4">
  <input id="phone" name="phone" type="tel" placeholder="Veuillez entrer votre numéro de portable" class="form-control input-md">
  </div><br>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="phone_2">Téléphone fixe</label>
  <div class="col-md-4">
  <input id="phone_2" name="phone_2" type="tel" placeholder="Veuillez entrer votre numéro de téléphone fixe" class="form-control input-md">
  </div><br>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="address">Adresse</label>
  <div class="col-md-4">
  <input id="address" name="address" type="text" placeholder="Veuillez entrer votre adresse" class="form-control input-md">
  </div><br>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="city">Ville</label>
  <div class="col-md-4">
  <input id="city" name="city" type="text" placeholder="Veuillez entrer votre ville" class="form-control input-md">
  </div><br>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="zip_code">Code postal</label>
  <div class="col-md-4">
  <input id="zip_code" name="zip_code" type="text" placeholder="Veuillez entrer votre code postal" class="form-control input-md">
  </div>
 </div> 

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-8">
    <button type="submit" class="btn btn-primary">Envoyer le formulaire</button>
    <button type="submit" class="btn btn-warning">Retour Accueil</button>
  </div>
</div>

</fieldset>
</form>


<?php $this->stop('main_content') ?>