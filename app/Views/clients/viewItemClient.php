<?php $this->layout('layoutclient', ['title' => '']) ?>

<?php $this->start('main_content') ?>
	
	<?php

		$priceTTC = \Tools\Utils::priceTTCWithDiscount($view['price_ht'], $view['taxes'], $view['discount']);
		$discount = \Tools\Utils::discount($view['price_ht'],$view['discount']);
		$tva = \Tools\Utils::calculTVA($priceTTC, $discount);
		
	?>

	<div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
	<img src="<?= $this->assetUrl($view['picture']) ?>" alt="<?php echo $view['picture'];?>" class="img-responsive ">
	</div>

	<div class="col-xs-5" style="border:0px solid gray">
<!-- 	<h1>Description</h1> -->
	<h3>Réference :<br><?php echo $view['ref'];?></h3>
	<h3>Description :<br><?php echo $view['description'];?></h3>
	
	<h3>Dont :<br><?php echo $tva;?> € de TVA</h3>

	<h3>Prix HT remisé : <br><?php echo $discount;?> €</h3>

	<h3>Prix TTC :<br><?php echo $priceTTC;?> €</h3>

	<h3>Attention il reste <?php echo $view['stock'];?> articles en stock</h3>
	</div>
	

<?php $this->stop('main_content') ?>
