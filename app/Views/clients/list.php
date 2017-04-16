<?php $this->layout('layoutadmin', ['title' => 'Liste clients']) ?>

<?php $this->start('main_content') ?>


<div class="container">
        <div class="col-md-3" id="admincontrol" style="position:inherit;">  
                  <div class="col-xs-3"> 
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
                            
                        </div><!-- /list-group -->      
                    
                        
                        </div><!-- /col -->
            </div>
        </div><!-- /row -->
<div class="col-md-9">
 <div class="table-responsive">          
    <table class="table" id="adminlistclient" >
       <div class="col-md-12">
	

		<thead>
			<tr>
				<th>N°</th>
				<th>Pseudo</th>
				<th>Nom</th>
				<th>Prénom</th>
			</tr>
		</thead>

		<tbody>
			<!-- foreach permettant d'avoir une ligne <tr> par ligne SQL (pour chaque donnée de ma table item, on définit une valeur  avec attribut-->
			<?php foreach($clients as $client): ?>
				<tr>
					<td><?=$client['id']; ?></td>
					<td><?=$client['pseudo']; ?></td>
					<td><?=$client['lastname']; ?></td>
					<td><?=$client['firstname']; ?></td>
					<td>
					<a href="<?php echo $this->url('Clients_viewClient', ['id' => $client['id']]);?>" class="btn btn-info">
						Détails
						</a>
					</td>
					<!-- <td>
					<a href="<?php //echo $this->url('Clients_viewClient', ['id' => $client['id']]);?>" class="btn btn-warning">
						Supprimer
						</a>
					</td> -->
				</tr>

				
			<?php endforeach; ?>
			
			
		</tbody>
		</div>
	</table>
</div>
</div>
</div>

<?php $this->stop('main_content') ?>