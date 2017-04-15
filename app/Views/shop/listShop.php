<!--article-->


<?php $this->layout('layoutshop', ['title' => 'Liste des boutiques']) ?>

<?php $this->layout('layoutadmin', ['title' => 'Liste des boutiques']) ?>

<?php $this->start('main_content') ?>
<div class="container">
        <div class="col-md-3" id="admincontrol" style="position:absolute;">  
                  <div class="col-xs-3"> 
                    <h2>Administration</h2>
                </div><!-- /row -->
                <div class="row">
                    <div class="col-xs-3 col-sm-12" id="shop">
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
<div class="col-md-9">
 <div class="table-responsive">          
    <table class="table" id="adminlistshop" >
       <div class="col-md-12">


   
<article class="listShop">

<h1>liste des boutiques</h1>
	<table>
		<thead>
			<tr>
				<th>#</th>
				<th>Nom</th>
				<!-- <th>Raison Sociale</th> -->
				<th>Contact</th>
				<th>icone poubelle</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
		<?php foreach($shop as $shoper): ?>
			<tr>
				<th><?= $shoper['id'];?></th>
				<th><a href="<?= $this->url('shop_viewShop', ['id'=> $shoper['id']]); ?>"><?= $shoper['commercialName'];?></a></th>
				
				<th><a href="<?= $this->url('shop_mailToShop', ['id'=> $shoper['id']]); ?>"><?= $shoper['email'];?></a></th>
				
				<th><a href="<?= $this->url('shop_deleteShop', ['id'=> $shoper['id']]);?>"><?= 'Supprimer';?></a></th>
				
			</tr>
		<?php endforeach; ?>
			
		</tbody>
	</table>
	<?php //var_dump($shop); ?>
</article>
      
          </div>
     </table>  
    </div>
</div>
</div>	
<?php $this->stop('main_content') ?>


