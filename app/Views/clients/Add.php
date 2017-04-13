<?php $this->layout('layoutclient', ['title' => 'Créer mon compte']) ?>

<?php $this->start('main_content')?>

<div class="container-fluid pull-right" >
   <div class="col-xs-10 " id="addclient">
    <div class="row">
        <div class="col-xs-12">
            
         

  <form class="form-horizontal" method="post" id="form_clients" enctype="multipart/form-data">
<fieldset>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-6 control-label" for="pseudo" >Pseudo 
  
  <input id="pseudo" name="pseudo" type="text" placeholder="Veuillez saisir votre pseudo" class="form-control input-md">
  </label> <br>
</div>

<div class="form-group">
  <label class="col-md-6 control-label" for="lastname">Nom
  
  <input id="lastname" name="lastname" type="text" placeholder="Veuillez saisir votre nom" class="form-control input-md">
  </label><br>
</div>

<div class="form-group">
  <label class="col-md-6 control-label" for="firstname">Prénom
  
  <input id="firstname" name="firstname" type="text" placeholder="Veuillez saisir votre prénom" class="form-control input-md">
  </label>
  <br>
</div>

<div class="form-group">
  <label class="col-md-6 control-label" for="email">Email
  
  <input id="email" name="email" type="email" placeholder="Veuillez saisir votre adresse email" class="form-control input-md">
  </label><br>
</div>

<div class="form-group">
  <label class="col-md-6 control-label" for="password">Mot de passe
  
  <input id="password" name="password" type="password" placeholder="Veuillez entrer votre mot de passe" class="form-control input-md">
 </label><br>
</div>

<div class="form-group">
  <label class="col-md-6 control-label" for="phone">Téléphone portable
  
  <input id="phone" name="phone" type="tel" placeholder="Veuillez entrer votre numéro de portable" class="form-control input-md">
  </label><br>
</div>

<div class="form-group">
  <label class="col-md-6 control-label" for="phone_2">Téléphone fixe
  
  <input id="phone_2" name="phone_2" type="tel" placeholder="Veuillez entrer votre numéro de téléphone fixe" class="form-control input-md">
  </label><br>
</div>

<div class="form-group">
  <label class="col-md-6 control-label" for="address">Adresse
  
  <input id="address" name="address" type="text" placeholder="Veuillez entrer votre adresse" class="form-control input-md">
 </label><br>
</div>

<div class="form-group">
  <label class="col-md-6 control-label" for="city">Ville
  
  <input id="city" name="city" type="text" placeholder="Veuillez entrer votre ville" class="form-control input-md">
  </label><br>
</div>

<div class="form-group">
  <label class="col-md-6 control-label" for="zip_code">Code postal
  
  <input id="zip_code" name="zip_code" type="text" placeholder="Veuillez entrer votre code postal" class="form-control input-md">
 </label>
 </div> 

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-8">
    <button type="submit" class="btn btn-primary">Envoyer le formulaire</button>
      <button type="submit" class="btn btn-warning"><a href="<?=$this->url('Market_accueilSlider')?>">Retour Accueil</a></button>
  </div>
</div>

</fieldset>
</form>
       
            </div>
        </div>
    </div>

</div>
<?php $this->stop('main_content') ?>