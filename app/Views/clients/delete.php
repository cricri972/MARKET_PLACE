<?php $this->layout('layoutadmin', ['title' => 'Détails client']) ?>





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
                           
                            
                            <a href="<?=$this->url('Clients_listClient')?>" class="list-group-item primary">
                            Clients : gestion des clients       
                            </a>
                            
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
    </div>
</div>
<?php echo "Ce client a bien été supprimé";?>
<?php $this->stop('main_content') ?>



