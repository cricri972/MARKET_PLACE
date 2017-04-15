
<?php $this->layout('layoutshop', ['title' => 'Modifier une boutique']) ?>



<?php $this->layout('layoutadmin', ['title' => 'Ajouter/Modifier une boutique']) ?>

<?php $this->start('main_content') ?>

<div class=container>
<div class="row">

       
        <div class="col-md-3" id="admincontrol" style="position:absolute";>  
                  <div class="col-md-3"> 
                    <h2>Administration</h2>
                </div><!-- /row -->
                <div class="row">
                    <div class="col-md-3 col-sm-12" id="shop">
                        <div class="list-group client">
                            <a href="<?=$this->url('Clients_addClient')?>" class="list-group-item">
                            Clients : ajouter  
                            </a>
                            <a href="<?=$this->url('Clients_modifyClient')?>" class="list-group-item">
                            Clients : modifier   
                            </a>
                            <a href="<?=$this->url('Clients_listClient')?>" class="list-group-item primary">
                            Clients : liste       
                            </a>
                            <a href="<?=$this->url('Clients_deleteClient')?>" class="list-group-item">
                            Clients : supprimer
                            </a>
                            </div>
                        <div class="list-group shop">
                            <a href="<?=$this->url('shop_addShop')?>" class="list-group-item">
                            Boutiques : ajouter
                            </a>
                            <a href="<?=$this->url('shop_addOrUpdateShop')?>" class="list-group-item">
                            Boutiques : modifier
                                
                            </a>
                            <a href="<?=$this->url('shop_listShop')?>" class="list-group-item">
                            Boutiques : liste  
                            </a>
                            <a href="<?=$this->url('shop_deleteShop')?>" class="list-group-item">
                            Boutiques : supprimer 
                            </a>
                            </div>
                        <div class="list-group user">
                            <a href="<?=$this->url('Users_addUser')?>" class="list-group-item">
                            Users : ajouter     
                            </a>
                            <a href="<?=$this->url('Users_modifyUser')?>" class="list-group-item">
                            Users : modifier  
                            </a> 
                            <a href="<?=$this->url('Users_listUser')?>" class="list-group-item">
                            Users : liste   
                            </a>
                             <a href="<?=$this->url('Users_deleteUser')?>" class="list-group-item">
                            Users : supprimer  
                            </a>
                             <a href="#" class="list-group-item">
                                
                            </a>
                             <a href="#" class="list-group-item">                               
                            </a>
                        </div><!-- /list-group -->      
                    </div><!-- /col -->
            </div>
        </div><!-- /row -->



<div class="col-md-9" id="formshopadmin">


<div class="container " >
    <div class="row">
	    <div class="col-md-9">



<form method="post" class="form-horizontal" id='form_shop' enctype="multipart/form-data">
    <div class="col-md-12">
    <h1>Mettre à jour la boutique</h1>
    <br>



   <p><?php echo $result; ?></p>


        
    


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

</fieldset>

<fieldset>

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
</fieldset>

<fieldset>
<legend>Changer de logo</legend>

<div class="form-group">
      <div class="col-md-8">
        <label class="btn btn-block btn-primary  control-label" for="logo"> Logo de la Boutique
          <input id="logo" name="logo" type="file" value="<?=(isset($shop['raisonSocial'])) ? $shop['raisonSocial'] : '';?>" placeholder="Images à afficher sur le market" accept="image/*" multiple style="display: none;width:100%;">
        </label>
       </div>
    
<!-- <label class="col-md-4 control-label" for="cover">Images Société</label>  
    <div class="col-md-4">
        <input id="cover" name="cover" type="file" value= placeholder="Images à afficher sur le market" class="form-control input-md">
    </div>
 -->
 
<!-- Button (Double) -->
</div>
</fieldset>  
<fieldset> 
  <legend></legend>
   <div class="form-group">
    <div class="col-md-8">
       <label class="btn btn-block  control-label pull-right"> 
        <button type="submit" id="addShopButton" class="btn btn-success ">Mettre à jour la boutique </button>
    
    </label>
    </div>
</div>

</fieldset>
    </div>
</form>


        
        
</div>
</div>
</div>
    </div>
</div>
</div>
<?php $this->stop('main_content') ?>