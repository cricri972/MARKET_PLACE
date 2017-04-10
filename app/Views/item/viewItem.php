<?php $this->layout('layoutItems', ['title' => 'Detail article']) ?>

<?php $this->start('main_content') ?>

<?php
function prixttc($prixht, $tva)
    {
        $prixht = $prixht;
        $tva = $tva;
        $prixttc = $prixht + ($prixht*$tva/100);
        return $prixttc;
    }
 	$prixttc = prixttc($view['price_ht'], $view['taxes']);
?>
	<h2>reference article:<?php echo $view['ref'];?></h2>
	<h2>Description article :<?php echo $view['description'];?></h2>
	<h2>Prix HT :<?php echo $view['price_ht'];?> €</h2>
	<h2>TVA de :<?php echo $view['taxes'];?> %</h2>
	<h2>Prix TTC :<?php echo $prixttc;?> €</h2>
	<h2>Il reste <?php echo $view['stock'];?> articles en stock</h2>

	
	
	<img src="<?= $this->assetUrl($view['picture']) ?>" alt="<?php echo $view['picture'];?>">

	 <button id="button2id" name="button2id" class="btn btn-info"><a href="<?php echo $this->url('item_listItem')?>">Lister les  articles</a></button>
	
	<br>
	<<!-- form class="form-horizontal" method="post" enctype="multipart/form-data">

			
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
