<?php $this->layout('layoutshop', ['title' => 'Liste des articles']) ?>

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
                            <a href="<?=$this->url('item_listItem')?>" class="list-group-item">
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
            




<div class="row col-md-9 col-xs-9">

	
	

	<table class="table table-striped" id="listarticlebyshop">
		<thead>
			<tr>
				<th>#</th>
				<th>Reference</th>
				<th>Titre</th>
				<th>Prix HT</th>
				<th>TVA</th>
				<th>stock</th>
				<th>Visualiser</th>
				<th>Supprimer</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($items as $item): ?>
				<tr>
					<th><?=$item['id'];?></th>
					<th><?=$item['ref'];?></th>
					<th><?=$item['name'];?></th>
					<th><?=$item['price_ht'];?></th>
					<th><?=$item['taxes'];?> %</th>
					<th><?=$item['stock'];?></th>
					<th><button id="button1id" name="button1id" class="btn btn-success"><a href="<?php echo $this->url('item_ViewItem', ['id' => $item['id']])?>">Visualiser</a></button></th>
					<th><button id="button1id" name="button1id" class="btn btn-danger"><a href="<?php echo $this->url('item_DeleteItem', ['id' => $item['id']])?>">Supprimer</a></button></th>
					<th><button id="button1id" name="button1id" class="btn "><a href="<?php echo $this->url('item_UpdateItem', ['id' => $item['id']])?>">Modifier</a></button></th>
					
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>
</div>
<?php $this->stop('main_content') ?>
