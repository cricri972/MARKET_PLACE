<!--article-->


<?php $this->layout('layoutshop', ['title' => 'Liste des boutiques']) ?>

<?php $this->layout('layoutadmin', ['title' => 'Liste des boutiques']) ?>

<?php $this->start('main_content') ?>

<div class="container-fluid pull-right " id="listshop">
    <div class="row">
	    
	    <div class="col-xs-9 col-sm-9">
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
    </div>
</div>
	
<?php $this->stop('main_content') ?>


