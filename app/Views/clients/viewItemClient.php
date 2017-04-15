<?php $this->layout('layoutclient', ['title' => '']) ?>

<?php $this->start('main_content') ?>
	
	<div class="container">
        <div class="col-md-12">       
            
            <div class="col-md-3"  id="boutique" style="position:inherit;">
         
                    <h2 class="">Nos Boutiques</h2>
                
                <div class="row">
                    <div class="col-md-3 col-md-12" id="shop">
                        <div class="list-group">
                            <a href="<?=$this->url('item_ViewItem')?>" class="list-group-item primary">
                               
                                <img src="<?= $this->assetUrl('img/M_BricolagePtt.jpg') ;?>">
                            </a>
                            <a href="#" class="list-group-item">
                                
                                <img src="<?= $this->assetUrl('img/IntersportPtt.jpg') ;?>">
                            </a>
                            <a href="#" class="list-group-item">
                               
                                <img src="<?= $this->assetUrl('img/Sun_RecordsPtt.jpg') ;?>">
                            </a>
                            <a href="#" class="list-group-item">
                                <img src="<?= $this->assetUrl('img/LaGrandeRecreBleu-Ptt.jpg') ;?>">
                            </a>
                            <a href="#" class="list-group-item">
                                <img src="<?= $this->assetUrl('img/CarrefourPtt.jpg') ;?>">
                            </a>
                            <a href="#" class="list-group-item">
                                <img src="<?= $this->assetUrl('img/Mango.jpg') ;?>">
                            </a>
                             <a href="#" class="list-group-item">
                                <img src="<?= $this->assetUrl('img/lacoste.jpg') ;?>">
                            </a>
                             <a href="#" class="list-group-item">
                                <img src="<?= $this->assetUrl('img/Samsung.jpg') ;?>">
                            </a>
                           
                           
                        </div><!-- /list-group -->      
                    </div><!-- /col -->

                </div><!-- /row -->
            </div>

<div class="container">


<div class="row col-xs-9 col-sm-9">

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
	
        </div>
</div>
        </div>
</div>
<?php $this->stop('main_content') ?>
