<?php $this->layout('layoutadmin', ['title' => 'Connexion membre']) ?>

<?php $this->start('main_content') ?>


<div class="container">
        <div class="col-md-3" id="admincontrol" style="position:inherit;">  
                  <div class="col-xs-3"> 
                    <h2>Administration</h2>
                </div><!-- /row -->
                <div class="row">
                    <div class="col-xs-3 col-sm-12" id="shop">
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

    <div class="form-group">
      <label class="col-md-12 control-label" for="selectmultiple">Confirmez votre rôle
      
      <select id="selectmultiple" name="selectmultiple" class="form-control">
      <option value="1">Editeur</option>
      <option value="2">Administrateur</option>
      </select>
      </label>
    </div>  

    <!-- Button (Double) -->
    <div class="form-group">
      <label class="col-md-12 control-label" for="submit">
     
        <button type="submit" class="btn btn-success">Me connecter</button>
        <button type="submit" class="btn btn-warning">Mot de passe oublié ?</button>
        <a href="<?=$this->url('Market_admin')?>" class="btn btn-info btn-md couleur" >Retour Accueil&nbsp;&nbsp;<span class="glyphicon glyphicon-user"></span></a>
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