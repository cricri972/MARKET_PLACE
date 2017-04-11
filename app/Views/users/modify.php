<?php $this->layout('layout', ['title' => 'Modifier mes informations']) ?>

<?php $this->start('main_content') ?>

<?php if(isset($result)){
	echo $result; //on peut aussi écrire directement echo $result sans le if
	}?>


  <form class="form-horizontal" method="post" id="form_clients">
<fieldset>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" for="lastname">Nom</label>
  <div class="col-md-4">
  <input id="lastname" name="lastname" type="text" value="<?php echo $detail['lastname'];?>" class="form-control input-md">
  </div><br>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="firstname">Prénom</label>
  <div class="col-md-4">
  <input id="firstname" name="firstname" type="text" value="<?php echo $detail['firstname'];?>" class="form-control input-md">
  </div><br>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>
  <div class="col-md-4">
  <input id="email" name="email" type="email" value="<?php echo $detail['email'];?>" class="form-control input-md">
  </div><br>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="password">Mot de passe</label>
  <div class="col-md-4">
  <input id="password" name="password" type="password" value="<?php echo $detail['password'];?>" class="form-control input-md">
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
    <button type="submit" class="btn btn-primary">Envoyer les modifications</button>
    <button type="submit" class="btn btn-info"><a href = "#">Retour Accueil</a></button>
  </div>
</div>

</fieldset>
</form>

<style>
    h1{
        width: 320px;
        border-radius: 10px;
        background-color: brown;
        color: aliceblue;
        padding: 10px;
        text-align: center;
    };
                
</style>

<?php $this->stop('main_content') ?>