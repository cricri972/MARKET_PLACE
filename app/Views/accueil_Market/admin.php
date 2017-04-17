<?php $this->layout('layoutadmin', ['title' => 'adminclinetmodif']) ?>

<?php $this->start('main_content') ?>

<div class="container">
        <div class="col-md-3" id="admincontrol" style="position:inherit;">  
                <div class="col-md-3"> 
                    <h2>Administration</h2>
                </div><!-- /row -->
                <div class="row">
                    <div class="col-md-3 col-sm-12" id="shop">
                        <div class="list-group client">
                           <fieldset>
                            <a href="<?=$this->url('Clients_listClient')?>" class="list-group-item primary">
                            Clients : gestion des clients       
                            </a>
                            </fieldset>    
                        </div>
                        <div class="list-group shop">
                            <a href="<?=$this->url('shop_addShop')?>" class="list-group-item">
                            Boutiques : ajouter
                            </a>
                            <a href="<?=$this->url('shop_listShop')?>" class="list-group-item">
                            Boutiques :  gestion des boutiques  
                            </a>
                        </div>
                        <div class="list-group user">
                            <a href="<?=$this->url('Users_addUser')?>" class="list-group-item">
                            Users : ajouter     
                            </a> 
                            <a href="<?=$this->url('Users_listUser')?>" class="list-group-item">
                            Users :  gestion des users   
                            </a>
                        </div>  
                        <div class="list-group user">
                            <a href="<?=$this->url('Users_addUser')?>" class="list-group-item">
                            Articles : ajouter     
                            </a> 
                            <a href="<?=$this->url('Users_listUser')?>" class="list-group-item">
                            Articles :  gestion des articles   
                            </a>
                        </div><!-- /list-group -->   
                    
                        
                        </div><!-- /col -->
                    
                </div>
        </div><!-- /row -->
        
 <?php if(empty($w_user)): ?>       
<div class="col-md-9" id="loginclient">
 <h3>Identifiez-Vous</h3>
    <div class="row">
	    
	    <div class="col-md-9 col-sm-12">
            
<form class="form-horizontal" method="post" id="form_clients">
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
     
        <button type="submit" class="btn btn-success">Me connecter</button>
        <button type="submit" class="btn btn-warning">Mot de passe oublié ?</button>
       
    </label>
    </div>

  </fieldset>
</form>
</div>
                </div>
            </div>
            <?php endif; ?>
        </div>
   



<?php $this->stop('main_content') ?>