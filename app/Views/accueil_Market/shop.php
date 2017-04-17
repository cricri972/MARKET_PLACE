	
<?php $this->layout('layoutshop', ['title' => 'shop']) ?>

<?php $this->start('main_content') ?>
<div class="container">
    <div class=" col-md-3" id="boutique" style="position:inherit;height:48em;">
        <div class="col-md-12">
            <div class="row ">
                <h2 >Gérer ma Boutique</h2>
            </div>
            <div class="col-md-12 " id="shop">
                <div class="row">
                   
                    <div class="list-group">
                            
                            <a href="<?=$this->url('shop_addOrUpdateShopByShop')?>" class="list-group-item primary">
                            Modification information        
                            </a>
                            
                            <a href="<?=$this->url('item_addItemShop')?>" class="list-group-item">
                            Ajouter article   
                            </a>
                            
                            <a href="<?=$this->url('item_listItemByShop')?>"class="list-group-item">
                            Liste articles 
                            </a>   
                            
                            <a href="#" class="list-group-item">
                            Voir article    
                            </a>
                           
                            <a href="#" class="list-group-item">
                            Modification article    
                            </a>   
                           
                            <a href="#" class="list-group-item">
                            Supprimer article   
                            </a>
                           
                            <a href="#" class="list-group-item">
                              
                            </a>
                           
                           
                    </div><!-- /list-group -->      
            </div><!-- /col -->
        </div><!-- /row -->
    </div>
</div><!-- /container -->
            
<?php if(empty($w_user)): ?>
       
<div class="col-md-9" id="loginshop">
    <h3>Identifiez-Vous</h3>
        <div class="row">
	    
	    <div class="col-md-9 col-xs-12">
            
<form class="form-horizontal" method="post" id="form_shop">
  <fieldset class="col-md-12">

    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-12 control-label" for="email">Email
      
      <input id="email" name="email" type="email" placeholder="Veuillez saisir votre adresse email" class="form-control input-md">
      <br>
    </label>
    </div>
    <div class="form-group">
    <label class="col-md-12 control-label" for="password">Mot de passe
        <input id="password" name="password" type="password" placeholder="Veuillez entrer votre mot de passe" class="form-control input-md">
    </label>  
    </div>

    
    <!-- Button (Double) -->
    <div class="form-group">
    <label class="col-md-12 control-label" for="submit">
     
        <button type="submit" class="btn btn-success"><a href="<?=$this->url('item_addItemShop')?>">Me connecter</a></button>
        <button type="submit" class="btn btn-warning"><a href="<?=$this->url('item_MailItemPswUserShop')?>">Mot de passe oublié ?</a></button>
        <a href="<?=$this->url('Market_admin')?>" class="btn btn-info btn-md couleur" >Retour Accueil&nbsp;&nbsp;<span class="glyphicon glyphicon-user"></span></a>
    </label>
    </div>

  </fieldset>
</form>
</div>
</div>
</div>
</div>

<?php endif; ?>


<?php $this->stop('main_content') ?>