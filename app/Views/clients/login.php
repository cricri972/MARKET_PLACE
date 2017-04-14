<?php $this->layout('layoutclient', ['title' => 'Connexion']) ?>

<?php $this->start('main_content') ?>


<div class="container-fluid pull-right" >
    <div class="col-xs-12 " id="login">
        <div class="row">
            <div class="col-xs-12">
            
            
<form class="form-horizontal" method="post" id="form_clients">
  <fieldset>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-6 control-label" for="email">Email
      
      <input id="email" name="email" type="email" placeholder="Veuillez saisir votre adresse email" class="form-control input-md">
      </label><br>
    </div>

    <div class="form-group">
      <label class="col-md-6 control-label" for="password">Mot de passe
     
      <input id="password" name="password" type="password" placeholder="Veuillez entrer votre mot de passe" class="form-control input-md">
      </label>
    </div>

    <div class="form-group">
      <label class="col-md-6 control-label" for="submit"></label>
      <div class="col-md-8">
        <button type="submit" class="btn btn-primary">Se connecter</button>
        <button type="submit" class="btn btn-primary">Mot de passe oublié ?</button>
        <button type="submit" class="btn btn-warning"><a href="<?=$this->url('Clients_addClient')?>">Créer mon compte</a></button>
      </div>
    </div>

  </fieldset>
</form>
            </div>
        </div>
    </div>
</div>

<?php $this->stop('main_content') ?>