<?php $this->layout('layoutclient', ['title' => 'Modifier mes informations']) ?>

<?php $this->start('main_content') ?>


<div class="container">
    <div class="col-md-12">    

        <div class="col-md-3"  id="boutique">
         
            <h2 class="">Nos Boutiques</h2>
                
                <div class="row">
                    <div class="col-md-3 col-md-12" id="shop">
                        <div class="list-group">
                            <a href="<?=$this->url('item_ViewItem')?>" class="list-group-item primary">
                               
                                <img class="img-responsive" src="<?= $this->assetUrl('img/M_BricolagePtt.jpg') ;?>">
                            </a>
                            <a href="#" class="list-group-item">
                                
                                <img class="img-responsive" src="<?= $this->assetUrl('img/IntersportPtt.jpg') ;?>">
                            </a>
                            <a href="#" class="list-group-item">
                               
                                <img class="img-responsive" src="<?= $this->assetUrl('img/Sun_RecordsPtt.jpg') ;?>">
                            </a>
                            <a href="#" class="list-group-item">
                                <img class="img-responsive" src="<?= $this->assetUrl('img/LaGrandeRecreBleu-Ptt.jpg') ;?>">
                            </a>
                            <a href="#" class="list-group-item">
                                <img class="img-responsive" src="<?= $this->assetUrl('img/CarrefourPtt.jpg') ;?>">
                            </a>
                            <a href="#" class="list-group-item">
                                <img class="img-responsive" src="<?= $this->assetUrl('img/Mango.jpg') ;?>">
                            </a>
                             <a href="#" class="list-group-item">
                                <img class="img-responsive" src="<?= $this->assetUrl('img/lacoste.jpg') ;?>">
                            </a>
                             <a href="#" class="list-group-item">
                                <img class="img-responsive" src="<?= $this->assetUrl('img/Samsung.jpg') ;?>">
                            </a>
                           
                           
                        </div><!-- /list-group -->      
                    </div><!-- /col -->

                </div><!-- /row -->
        </div>

    
<?php if(isset($result)){
	echo $result; //on peut aussi écrire directement echo $result sans le if
	}?>

   <div class="col-md-9" >
	    
	    <div class="col-xs-9 col-sm-12"  style="margin-left:45%;margin-top:10%;position:inherit;">
	        <div class="row">
  <form class="form-horizontal" method="post" id="form_clients" enctype="multipart/form-data">
<fieldset>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="pseudo">Pseudo</label>  
  <div class="col-md-4">
  <input id="pseudo" name="pseudo" type="text" value="<?php echo $detail['pseudo'];?>" class="form-control input-md"> 
  </div><br>
</div>

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

<div class="form-group">
  <label class="col-md-4 control-label" for="phone">Téléphone portable</label>
  <div class="col-md-4">
  <input id="phone" name="phone" type="tel" value="<?php echo $detail['phone'];?>" class="form-control input-md">
  </div><br>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="phone_2">Téléphone fixe</label>
  <div class="col-md-4">
  <input id="phone_2" name="phone_2" type="tel" value="<?php echo $detail['phone_2'];?>" class="form-control input-md">
  </div><br>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="address">Adresse</label>
  <div class="col-md-4">
  <input id="address" name="address" type="text" value="<?php echo $detail['address'];?>" class="form-control input-md">
  </div><br>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="city">Ville</label>
  <div class="col-md-4">
  <input id="city" name="city" type="text" value="<?php echo $detail['city'];?>" class="form-control input-md">
  </div><br>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="zip_code">Code postal</label>
  <div class="col-md-4">
  <input id="zip_code" name="zip_code" type="text" value="<?php echo $detail['zip_code'];?>" class="form-control input-md">
  </div>
 </div> 

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-8">
    <button type="submit" class="btn btn-success">Valider les modifications</button>
    <a href="<?php echo $this->url('Market_client');?>" class="btn btn-info">Retour Accueil</a>
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