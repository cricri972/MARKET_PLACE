<?php $this->layout('layoutshop', ['title' => '']) ?>

<?php $this->start('main_content') ?>
	
	<?php

		$priceTTC = \Tools\Utils::priceTTCWithDiscount($view['price_ht'], $view['taxes'], $view['discount']);
		$discount = \Tools\Utils::discount($view['price_ht'],$view['discount']);
		$tva = \Tools\Utils::calculTVA($priceTTC, $discount);
		
	?>

<div class="container">
        <div class="col-md-12">       
           <div class="row">
            <div class="col-md-3"  id="boutique" style="height:90em;">
         
                    <h2 >Nos Boutiques</h2>
                
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
           <!-- /container -->

</div> 
<div class="col-md-9" style="margin-left:30%;margin-top:5%">	
	

    <div class="row">
	    <div class="col-md-9">


	<div class="gallery_product col-md-9  col-xs-6 filter hdpe">
	<img src="<?= $this->assetUrl($view['picture']) ?>" alt="<?php echo $view['picture'];?>" class="img-responsive ">
	</div>

	<div class="col-md-12" style="border:0px solid gray">
<!-- 	<h1>Description</h1> -->
	<h3>Réference :<br><?php echo $view['ref'];?></h3>
	<h3>Description :<br><?php echo $view['description'];?></h3>
	
	<h3>Dont :<br><?php echo $tva;?> € de TVA</h3>

	<h3>Prix HT remisé : <br><?php echo $discount;?> €</h3>

	<h3>Prix TTC :<br><?php echo $priceTTC;?> €</h3>

	<h3>Attention il reste <?php echo $view['stock'];?> articles en stock</h3>
	</div>
	
	

	 <!-- <button id="button2id" name="button2id" class="btn btn-info"><a href="<?php //echo $this->url('item_listItem')?>">Lister les  articles</a></button> -->

	
	<br>
	<!-- form class="form-horizontal" method="post" enctype="multipart/form-data">

			
			<div class="form-group">
				<label class="col-md-4 control-label" for="firstname">PSEUDO</label>
				<div class="col-md-4">
					<input type="text" id="firstname" name="firstname" class="form-control input-md">
				</div>
			</div>
           
            <div class="form-group">
			  <label class="col-md-4 control-label" for="comment">Votre commentaire</label>
			  <div class="col-md-4">                     
			    <textarea class="form-control" id="comment" name="comment" placeholder="mettre un contenu"></textarea>
			  </div>
			</div>
			

			
			<div class="form-group">
				<div class="col-md-4 col-md-offset-4">
					<button type="submit">commenter</button>
				</div>
			</div>
		</form> -->
	

<?php $this->stop('main_content') ?>
