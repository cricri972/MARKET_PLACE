<?php $this->layout('layoutadmin', ['title' => 'Confirmation suppression']) ?>
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
                            <a href="<?=$this->url('Clients_modifyClient')?>" class="list-group-item">
                            Clients : modifier   
                            </a>
                            <a href="<?=$this->url('Clients_listClient')?>" class="list-group-item primary">
                            Clients : liste       
                            </a>
                            <a href="<?=$this->url('Clients_deleteClient')?>" class="list-group-item">
                            Clients : supprimer
                            </a>
                            </fieldset>    
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
<div class="col-md-9" id="delshop">        
<article class="confirmDelete">
	<form method="post" class="form-horizontal" id='form_shop' enctype="multipart/form-data">
		<label class="col-md-3 control-label" for="delConfirm">Confirmez-vous la suppression ?</label>  
    <div class="col-md-3">
        <input id="delConfirm" name="delConfirm" type="text" placeholder="Saisissez \'oui\' ou 'non'" class="form-control input-md">
    </div>
    </form>	
</article>
</div>

<?php $this->stop('main_content') ?>