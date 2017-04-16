
<?php $this->layout('layoutshop', ['title' => 'Détails']) ?>



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
                            <a href="<?=$this->url('shop_addOrUpdateShop')?>" class="list-group-item primary">
                            Modification information        
                            </a>
                            
                            <a href="<?=$this->url('shop_listShop')?>" class="list-group-item">
                            Liste articles 
                            </a>   
                            <a href="#" class="list-group-item">
                            Voir article    
                            </a>
                            <a href="#" class="list-group-item">
                            Ajouter article   
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
<div class="col-md-9" id="identityshop">
    <h3>Identifiez-Vous</h3>
        <div class="row">
	    
	    <div class="col-md-9 col-sm-12">
<article class="viewShop">

<img src="<?= $this->assetUrl($shop['logo']) ?>">
<?php var_dump($shop);?>
<h1><?= $shop['commercialName'] ?></h1><br>
<h3><?= $shop['raisonSocial'] ?></h3><br>
<h3><?= $shop['immatriculation'] ?></h3><br>
<h3><?= $shop['apeCode'] ?></h3><br>
<h3><?= $shop['nameGerant'] ?></h3><br>
<h3><?= $shop['phone'] ?></h3><br>
<h3><a href="<?= $this->url('shop_mailToShop', ['id'=> $shop['id']]); ?>"><?= $shop['email'] ?></a></h3><br>
<h3><?= $shop['adress'] ?></h3><br>
<h3><?= $shop['zipcode'] ?></h3><br>
<h3><?= $shop['city'] ?></h3><br>

</article>
</div>
</div>
</div>
</div>	
<?php $this->stop('main_content') ?>



	