<?php $this->layout('layoutadmin', ['title' => 'Créer mon compte']) ?>

<?php $this->start('main_content') ?>
<div class=container>
<div class="row">

       
        <div class="col-md-3" id="admincontrol" style="position:inherit";>  
                  <div class="col-md-3"> 
                    <h2>Administration</h2>
                </div><!-- /row -->
                <div class="row">
                    <div class="col-md-3 col-sm-12" id="shop">
                        <div class="list-group client">
                           
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
 <p><?php echo $result; ?></p>
  <form class="form-horizontal" method="post" id="form_clients" enctype="multipart/form-data">
<fieldset>

<div class="form-group">
  <label class="col-md-4 control-label" for="lastname">Nom</label>
  <div class="col-md-4">
  <input id="lastname" name="lastname" type="text" placeholder="Veuillez saisir votre nom" class="form-control input-md">
  </div><br>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="firstname">Prénom</label>
  <div class="col-md-4">
  <input id="firstname" name="firstname" type="text" placeholder="Veuillez saisir votre prénom" class="form-control input-md">
  </div><br>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>
  <div class="col-md-4">
  <input id="email" name="email" type="email" placeholder="Veuillez saisir votre adresse email" class="form-control input-md">
  </div><br>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="password">Mot de passe</label>
  <div class="col-md-4">
  <input id="password" name="password" type="password" placeholder="Veuillez entrer votre mot de passe" class="form-control input-md">
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
    <button type="submit" class="btn btn-primary">Envoyer le formulaire</button>
    <button type="submit" class="btn btn-warning"><a href="<?=$this->url('Market_admin')?>">Retour Accueil</a></button>
  </div>
</div>

</fieldset>
</form>

    </div>
</div>
<?php $this->stop('main_content') ?>