<?php $this->layout('layoutadmin', ['title' => 'Modifier mes informations']) ?>

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
                            Boutiques : gestion des boutiques  
                            </a>
                            
                            </div>
                        <div class="list-group user">
                            <a href="<?=$this->url('Users_addUser')?>" class="list-group-item">
                            Users : ajouter     
                            </a>
                             
                            <a href="<?=$this->url('Users_listUser')?>" class="list-group-item">
                            Users : gestion des users   
                            </a>
                            
                        </div><!-- /list-group -->      
                    </div><!-- /col -->
            </div>
        </div><!-- /row -->
    
<?php if(isset($result)){
	echo $result; //on peut aussi écrire directement echo $result sans le if
	}?>
	
	
<div class="col-md-9">	
	
<div class="container " >
    <div class="row">
	    <div class="col-md-9">	

  <form class="form-horizontal" method="post" id="form_clients" enctype="multipart/form-data" >
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
    <a href="<?php echo $this->url('Clients_listClient');?>" class="btn btn-info">Retour liste</a>
  </div>
</div>

</fieldset>
</form>
        </div>
    </div>
    </div>
    </div>
    
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