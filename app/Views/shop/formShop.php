
<?php $this->layout('layoutshop', ['title' => 'Modifier une boutique']) ?>



<?php $this->layout('layoutadmin', ['title' => 'Ajouter/Modifier une boutique']) ?>
>>>>>>> origin/Dev
<?php $this->start('main_content') ?>


<div class="container-fluid pull-right " id="formshop">
		<div class="row">
	    
	    <div class="col-xs-9 col-sm-9">

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

    <label class="col-md-6 control-label" for="commercialName">Nom commercial 
    
        <input id="commercialName" name="commercialName" type="text" value="<?=(isset($shop['commercialName'])) ? $shop['commercialName'] : '';?>" placeholder="Nom de la boutique" class="form-control input-md">
   
    </label>
    <label  class="col-md-6 control-label" for="name">Raison Sociale 
    
        <input id="raisonSocial" name="raisonSocial" type="text" value="<?=(isset($shop['raisonSocial'])) ? $shop['raisonSocial'] : '';?>" placeholder="Dénomination Administrative" class="form-control input-md">
    
    </label>
</div>

<div class="form-group">
    <label class="col-md-6 control-label" for="immatriculation">Immatriculation au RC  
   
        <input id="immatriculation" name="immatriculation" type="text" value="<?=(isset($shop['immatriculation'])) ? $shop['immatriculation'] : '';?>" placeholder="N° SIRET, ex. 404 833 048 00022" class="form-control input-md">
    </label>

    <label class="col-md-6 control-label" for="apeCode">Code APE  
   
        <input id="apeCode" name="apeCode" type="text" value="<?=(isset($shop['apeCode'])) ? $shop['apeCode'] : '';?>" placeholder="47.51Z, 47.63Z... " class="form-control input-md">
    </label>
</div>

</fieldset>

<fieldset>
<legend>Contact</legend>
<div class="form-group">
    <label class="col-md-6 control-label" for="nameGerant">Gérant  
        <input id="nameGerant" name="nameGerant" type="text" value="<?=(isset($shop['nameGerant'])) ? $shop['nameGerant'] : '';?>" placeholder="Prénom et Nom du gérant" class="form-control input-md">
    </label>
    
    
    <label class="col-md-6 control-label" for="email">Adresse Email  
        <input id="email" name="email" type="email" value="<?=(isset($shop['email'])) ? $shop['email'] : '';?>" placeholder="ex. donaldtrompe@tentivement.bar" class="form-control input-md">

    </label>
    
    <label class="col-md-6 control-label" for="phone">Téléphone  
        <input id="phone" name="phone" type="text" value="<?=(isset($shop['phone'])) ? $shop['phone'] : '';?>" placeholder="Saisissez votre téléphone" class="form-control input-md">
    </label>
     <label class="col-md-6 control-label" for="phone2">Téléphone 2  
        <input id="phone" name="phone2" type="text" value="<?=(isset($shop['phone2'])) ? $shop['phone2'] : '';?>" placeholder="Saisissez votre téléphone" class="form-control input-md">
    </label>

    </div>
<label class="col-md-6 control-label" for="phone">Téléphone
   
        <input id="phone" name="phone" type="tel" value="<?=(isset($shop['phone'])) ? $shop['phone'] : '';?>" placeholder="" class="form-control input-md">
   
</label>        

</fieldset>

<fieldest>
<legend>Adresse postale</legend>
<div class="form-group">
    <label class="col-md-6 control-label" for="adress">Adresse  
   
        <input id="adress" name="adress" type="text" value="<?=(isset($shop['adress'])) ? $shop['adress'] : '';?>" placeholder="N°, Rue, Impasse..." class="form-control input-md">
    </label>


    <label class="col-md-6 control-label" for="zipcode">Code Postal  
   
        <input id="zipcode" name="zipcode" type="text" value="<?=(isset($shop['zipcode'])) ? $shop['zipcode'] : '';?>" placeholder="97200" class="form-control input-md">
    </label>

<label class="col-md-6 control-label" for="city">Ville  
            
        <input id="city" name="city" type="text" value="<?=(isset($shop['city'])) ? $shop['city'] : '';?>" placeholder="Ville" class="form-control input-md">
    </label>
</div>
</fieldest>

<fieldset>
    <label class="col-md-6 control-label" for="logo">Logo de la Boutique  
   
        <input id="logo" name="logo" type="file" value="<?=(isset($shop['raisonSocial'])) ? $shop['raisonSocial'] : '';?>" placeholder="Images à afficher sur le market" class="form-control input-md">
    </label>
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
</div>
</div>
</div>
<?php $this->stop('main_content') ?>