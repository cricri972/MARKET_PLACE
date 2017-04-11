<?php $this->layout('layout', ['title' => 'Modifier une boutique']) ?>
<?php $this->start('main_content') ?>

<main>

  <h1>Maj de la boutique</h1>
  <br>


<?php if(isset($result)): ?>
    <p style="color:red;"><?php echo $result; ?></p>
  <?php endif; ?>

  




  <form method="post" class="form-horizontal" id='form_shop' enctype="multipart/form-data">



<fieldset>
<legend>Identité de la boutique</legend>
<!-- Text input-->
<div class="form-group">
 <!--  <label class="col-md-3 control-label " for="name">Nom</label>  
    <div class="col-md-3">
        <input id="name" name="name" type="text" value= placeholder="Saisissez votre Nom" class="form-control input-md">
    </div> -->

    <label class="col-md-3 control-label" for="commercialName">Nom commercial</label>  
    <div class="col-md-3">
        <input id="commercialName" name="commercialName" type="text" value="<?=(isset($shop['commercialName'])) ? $shop['commercialName'] : '';?>" placeholder="Nom de la boutique" class="form-control input-md">
    </div>

    <label <!-- class="col-md-3 control-label --> " for="name">Raison Sociale</label>  
    <div class="col-md-3">
        <input id="raisonSocial" name="raisonSocial" type="text" value="<?=(isset($shop['raisonSocial'])) ? $shop['raisonSocial'] : '';?>" placeholder="Dénomination Administrative" class="form-control input-md">
    </div>
</div>

<div class="form-group">
    <label class="col-md-3 control-label" for="immatriculation">Immatriculation au RC</label>  
    <div class="col-md-3">
        <input id="immatriculation" name="immatriculation" type="text" value="<?=(isset($shop['immatriculation'])) ? $shop['immatriculation'] : '';?>" placeholder="N° SIRET, ex. 404 833 048 00022" class="form-control input-md">
    </div>

    <label class="col-md-3 control-label" for="apeCode">Code APE</label>  
    <div class="col-md-3">
        <input id="apeCode" name="apeCode" type="text" value="<?=(isset($shop['apeCode'])) ? $shop['apeCode'] : '';?>" placeholder="47.51Z, 47.63Z... " class="form-control input-md">
    </div>
</div>

</fieldset>

<fieldset>
<legend>Contact</legend>
<div class="form-group">
  <label class="col-md-3 control-label" for="nameGerant">Gérant</label>  
    <div class="col-md-3">
        <input id="nameGerant" name="nameGerant" type="text" value="<?=(isset($shop['nameGerant'])) ? $shop['nameGerant'] : '';?>" placeholder="Prénom et Nom du gérant" class="form-control input-md">
    </div>

<label class="col-md-3 control-label" for="email">Adresse Email</label>  
    <div class="col-md-3">
        <input id="email" name="email" type="email" value="<?=(isset($shop['email'])) ? $shop['email'] : '';?>" placeholder="ex. donaldtrompe@tentivement.bar" class="form-control input-md">
    </div>
</div>
</fieldset>

<fieldest>
<legend>Adresse postale</legend>
<div class="form-group">
<label class="col-md-3 control-label" for="adress">Adresse</label>  
    <div class="col-md-4">
        <input id="adress" name="adress" type="text" value="<?=(isset($shop['adress'])) ? $shop['adress'] : '';?>" placeholder="N°, Rue, Impasse..." class="form-control input-md">
    </div>


<label class="col-md-3 control-label" for="zipcode">Code Postal</label>  
    <div class="col-md-2">
        <input id="zipcode" name="zipcode" type="text" value="<?=(isset($shop['zipcode'])) ? $shop['zipcode'] : '';?>" placeholder="97200" class="form-control input-md">
    </div>

<label class="col-md-3 control-label" for="city">Ville</label>  
    <div class="col-md-3">
        <input id="city" name="city" type="text" value="<?=(isset($shop['city'])) ? $shop['city'] : '';?>" placeholder="Ville" class="form-control input-md">
    </div>
</div>
</fieldest>

<label class="col-md-4 control-label" for="logo">Logo de la Boutique</label>  
    <div class="col-md-4">
        <input id="logo" name="logo" type="file" value="<?=(isset($shop['raisonSocial'])) ? $shop['raisonSocial'] : '';?>" placeholder="Images à afficher sur le market" class="form-control input-md">
    </div>
<!-- <label class="col-md-4 control-label" for="cover">Images Société</label>  
    <div class="col-md-4">
        <input id="cover" name="cover" type="file" value= placeholder="Images à afficher sur le market" class="form-control input-md">
    </div>
 -->

<!-- Button (Double) -->
<div class="form-group">
  
  <div class="col-md-8">
    <button type="submit" id="addShopButton" class="btn btn-success">Mettre à jour la boutique </button>
  </div>
</div>

</fieldset>
</form>

</main>

<?php $this->stop('main_content') ?>