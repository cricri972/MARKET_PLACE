<?php $this->layout('layoutclient', ['title' => 'Mon panier']) ?>
<?php $this->start('main_content') ?>

<div class="container">
  

<form class="table table-striped" method="post" action="basket.php">
	<table style="width: 400px">
		<thead>
			<tr>
				<th>Réf.</th>
				<th>Libellé</th>
				<th>Quantité</th>
				<th>Prix Unitaire</th>
				<th>Montant</th>
			</tr>
		</thead>

	<?php //var_dump($_SESSION); ?>
		<h1></h1>
	<?php  //debug($item); ?>

	<tbody>
	<?php //var_dump($item); ?>
	<br>


		<?php  foreach($item as $shoper): ?>
			<?php
				$priceTTC = \Tools\Utils::priceTTCWithDiscount($shoper['price_ht'], $shoper['taxes'], $shoper['discount']);
				$discount = \Tools\Utils::discount($shoper['price_ht'],$shoper['discount']);
				$tva = \Tools\Utils::calculTVA($priceTTC, $discount);
				$subTotal = \Tools\Utils::subTotal($priceTTC, $shoper['qty']);
		
			?>

			<tr>
				<!-- <th><?= $shoper['id'];?></th> -->
				<td><a href="<?= $this->url('item_ViewItem', ['id'=> $shoper['id']]); ?>"><?= $shoper['ref'];?></a></td>

				<td><a href="<?= $this->url('item_ViewItem', ['id'=> $shoper['id']]); ?>"><?= $shoper['name'];?></a></td>

				<td><input type="number" name="qty" min="1" value="<?= $shoper['qty'];?>" ></td>
				
				

				<td><?= $priceTTC ?></td>

				<td><?= $subTotal ?></td>
				
				<td>
				<td><a href="<?= $this->url('shop_deleteShop', ['id'=> $shoper['id']]);?>"><?= 'Supprimer';?></a></td>
				
			</tr>

		<?php endforeach; ?>
		

		
	</tbody>
	
	
	</table>

    	<button class="btn btn-success"><a href="<?= $this->url('Market_accueilSlider');?>">Accueil</a></button>

    	<a href="javascript:history.back()">Retour</a>	<!-- retour page precedente -->
	
		<button class="btn btn-echec"><a href="<?= $this->url('Order_clearBasket');?>">Vider le panier</a></button>

</form>



<?php $this->stop('main_content') ?>