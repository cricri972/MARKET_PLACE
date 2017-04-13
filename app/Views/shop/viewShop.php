<?php $this->layout('layoutshop', ['title' => 'Détails']) ?>
<?php $this->start('main_content') ?>


<article class="viewShop">

<img src="<?= $this->assetUrl($shop['logo']) ?>">
<?php var_dump($shop);?>
<h1><?= $shop['commercialName'] ?></h1><br>
<h3><?= $shop['raisonSocial'] ?></h3><br>
<h3><?= $shop['immatriculation'] ?></h3><br>
<h3><?= $shop['apeCode'] ?></h3><br>
<h3><?= $shop['nameGerant'] ?></h3><br>
<h3><a href="<?= $this->url('shop_mailToShop', ['id'=> $shop['id']]); ?>"><?= $shop['email'] ?></a></h3><br>
<h3><?= $shop['adress'] ?></h3><br>
<h3><?= $shop['zipcode'] ?></h3><br>
<h3><?= $shop['city'] ?></h3><br>

</article>
	
<?php $this->stop('main_content') ?>



	