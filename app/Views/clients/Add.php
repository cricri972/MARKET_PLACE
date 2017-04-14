<?php $this->layout('layoutclient', ['title' => 'Créer mon compte']) ?>

<?php $this->start('main_content')?>




<div class="container">
    <div class="col-md-12">    

        <div class="col-md-3"  id="boutique">
         
            <h2 class="">Nos Boutiques</h2>
                
                <div class="row">
                    <div class="col-md-3 col-md-12" id="shop">
                        <div class="list-group">
                            <a href="<?=$this->url('item_ViewItem')?>" class="list-group-item primary">
                               
                                <img src="<?= $this->assetUrl('img/M_BricolagePtt.jpg') ;?>">
                            </a>
                            <a href="#" class="list-group-item">
                                
                                <img src="<?= $this->assetUrl('img/IntersportPtt.jpg') ;?>">
                            </a>
                            <a href="#" class="list-group-item">
                               
                                <img src="<?= $this->assetUrl('img/Sun_RecordsPtt.jpg') ;?>">
                            </a>
                            <a href="#" class="list-group-item">
                                <img src="<?= $this->assetUrl('img/LaGrandeRecreBleu-Ptt.jpg') ;?>">
                            </a>
                            <a href="#" class="list-group-item">
                                <img src="<?= $this->assetUrl('img/CarrefourPtt.jpg') ;?>">
                            </a>
                            <a href="#" class="list-group-item">
                                <img src="<?= $this->assetUrl('img/Mango.jpg') ;?>">
                            </a>
                             <a href="#" class="list-group-item">
                                <img src="<?= $this->assetUrl('img/lacoste.jpg') ;?>">
                            </a>
                             <a href="#" class="list-group-item">
                                <img src="<?= $this->assetUrl('img/Samsung.jpg') ;?>">
                            </a>
                           
                           
                        </div><!-- /list-group -->      
                    </div><!-- /col -->

                </div><!-- /row -->
        </div>



   <div class="col-md-9">
    <div class="row" id="addclient">
        <div class="col-md-12">
            
  <?php if(!empty($result)){
  echo $result;
  }?>
  <!-- <p class="text-danger"><?php //echo $result; ?></p> -->

<form class="form-horizontal" method="post" id="form_clients" enctype="multipart/form-data">
<fieldset>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-12 control-label" for="pseudo" >Pseudo 
  
  <input id="pseudo" name="pseudo" type="text" placeholder="Veuillez saisir votre pseudo" class="form-control input-md">
  </label> <br>
</div>

<div class="form-group">
  <label class="col-md-6 control-label" for="lastname">Nom
  
  <input id="lastname" name="lastname" type="text" placeholder="Veuillez saisir votre nom" class="form-control input-md">
  </label><br>
</div>

<div class="form-group">
  <label class="col-md-12 control-label" for="firstname">Prénom
  
  <input id="firstname" name="firstname" type="text" placeholder="Veuillez saisir votre prénom" class="form-control input-md">
  </label>
  <br>
</div>

<div class="form-group">
  <label class="col-md-12 control-label" for="email">Email
  
  <input id="email" name="email" type="email" placeholder="Veuillez saisir votre adresse email" class="form-control input-md">
  </label><br>
</div>

<div class="form-group">
  <label class="col-md-12 control-label" for="password">Mot de passe
  
  <input id="password" name="password" type="password" placeholder="Veuillez entrer votre mot de passe" class="form-control input-md">
 </label><br>
</div>

<div class="form-group">
  <label class="col-md-12 control-label" for="phone">Téléphone portable
  
  <input id="phone" name="phone" type="tel" placeholder="Veuillez entrer votre numéro de portable" class="form-control input-md">
  </label><br>
</div>

<div class="form-group">
  <label class="col-md-12 control-label" for="phone_2">Téléphone fixe
  
  <input id="phone_2" name="phone_2" type="tel" placeholder="Veuillez entrer votre numéro de téléphone fixe" class="form-control input-md">
  </label><br>
</div>

<div class="form-group">
  <label class="col-md-12 control-label" for="address">Adresse
  
  <input id="address" name="address" type="text" placeholder="Veuillez entrer votre adresse" class="form-control input-md">
 </label><br>
</div>

<div class="form-group">
  <label class="col-md-6 control-label" for="city">Ville
  
  <input id="city" name="city" type="text" placeholder="Veuillez entrer votre ville" class="form-control input-md">
  </label><br>
</div>

<div class="form-group">
  <label class="col-md-12 control-label" for="zip_code">Code postal
  
  <input id="zip_code" name="zip_code" type="text" placeholder="Veuillez entrer votre code postal" class="form-control input-md">
 </label>
 </div> 

<!-- Button (Double) -->
<div class="form-group " >
  <label class="col-md-12 control-label" for="submit">
  <div class="col-md-6">
    <button type="submit" class="btn btn-primary">Envoyer le formulaire</button>
    </div>
    <div class="col-md-6">
    <button type="submit" class="btn btn-warning"><a href="<?=$this->url('Market_accueilSlider')?>">Retour Accueil</a></button>
  </div>
  </label>  
</div>

</fieldset>
</form>
       
            </div>
        </div>
    </div>
    </div>
   
    </div>

<?php $this->stop('main_content') ?>