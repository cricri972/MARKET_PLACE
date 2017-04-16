
<?php $this->layout('layoutadmin', ['title' => 'Liste des boutiques']) ?>

<?php $this->start('main_content') ?>

<div class="container">
    <div class=" col-md-3" id="boutique" style="position:inherit;height:75em;">
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
                            <a href="<?=$this->url('item_listItemByShop')?>" class="list-group-item">
                            Liste articles 
                            </a>   
                            <a href="item_listItemByShop" class="list-group-item">
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


