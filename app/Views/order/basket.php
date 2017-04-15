<?php $this->layout('layoutclient', ['title' => 'Mon panier']) ?>
<?php $this->start('main_content') ?>

<div class="container">
  

<form  method="post" action="basket.php">
	<table class="table table-striped" style="width: 400px">
		<thead >
			<tr >
				<th width="50px">Réf.</th>
				<th>Libellé</th>
				<th width="10px">Quantité</th>
				<th  >Prix Unitaire</th>
				<th>Montant</th>
			</tr>
		</thead>

	<?php // var_dump($_SESSION); ?>
		<h1></h1>
	<?php  //debug($item); ?>

	<tbody>
	<?php// $totSubTotal = []; // tableau recupérant les ss totaux (qté* ttc)?>
	<br>

				

		<?php  foreach($item as $shoper): ?>
			<?php
				$priceTTC = \Tools\Utils::priceTTCWithDiscount($shoper['price_ht'], $shoper['taxes'], $shoper['discount']);
				$discount = \Tools\Utils::discount($shoper['price_ht'],$shoper['discount']);
				$tva = \Tools\Utils::calculTVA($priceTTC, $discount);
				$subTotal = \Tools\Utils::subTotal($priceTTC, $shoper['qty']);
				$totSubTotal[] = $subTotal ;
				debug($totSubTotal);
			?>

			<tr>
				<!-- <th><?= $shoper['id'];?></th> -->
				<td><a href="<?= $this->url('item_ViewItem', ['id'=> $shoper['id']]); ?>"><?= $shoper['ref'];?></a></td>

				<td><a href="<?= $this->url('item_ViewItem', ['id'=> $shoper['id']]); ?>"><?= $shoper['name'];?></a></td>

				<td><input type="number" name="qty" min="1" value="<?= $shoper['qty'];?>"  ></td>
				
				<td><?= $priceTTC ?></td>

				<td><?= $subTotal ?></td>
				
				<td></td>
				<td></td>
				
			</tr>

		<?php endforeach; ?>
		
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td style="color: green">Sous-Total</td>
				<!-- <th><?= $shoper['id'];?></th> -->
				<td style="color: green"><?= array_sum($totSubTotal); // sous-total facture ttc ?>
					
				</td>
			</tr>
		
	</tbody>
	
	
	</table>

    	<button class="btn btn-primary"><a href="<?= $this->url('Market_accueilSlider');?>">Accueil</a></button>

    	<button class="btn btn-info"><a href="javascript:history.back()">Retour</a>	<!-- retour page precedente -->
	
		<button class="btn btn-danger"><a href="<?= $this->url('Order_clearBasket');?>">Vider le panier</a></button>

</form>

</div>

<?php $this->stop('main_content') ?>