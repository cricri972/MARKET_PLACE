<?php $this->layout('layoutclient', ['title' => 'J\'ai oublié mon mot de passe']) ?>

<?php $this->start('main_content') ?>


<div class="container-fluid pull-right">
    <div class="col-xs-12 " id="login">
        <div class="row">
            <div class="col-xs-12">
             
<form class="form-horizontal" method="post" id="form_clients">
  <fieldset>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-6 control-label" for="email">Email</label>
      
      <input id="email" name="email" type="email" placeholder="Veuillez saisir votre adresse email" class="form-control input-md">
      <br>
    </div>

    <div class="form-group">
      <label class="col-md-6 control-label" for="submit"></label>
      <div class="col-md-8">
        <button type="submit" class="btn btn-success">Envoyer</button>
      </div>
    </div>
  </fieldset>

</form>
            </div>
        </div>
    </div>
</div>

<?php $this->stop('main_content') ?>