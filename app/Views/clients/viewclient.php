
<?php $this->layout('layoutclient', ['title' => 'Liste des boutiques']) ?>

<?php $this->start('main_content') ?>



 <div class="container">
        <div class="col-md-12">       
            
            <div class="col-md-3"  id="boutique" style="height:70em;">
         
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


<div class="col-md-9" style="margin-left:50%;margin-top:15%">	
	

    <div class="row">
	    <div class="col-md-9">
            
<span>N° :</span><?php echo $descriptif['id'];?><br>
<span>Pseudo :</span><?php echo $descriptif['pseudo'];?><br>
<span>Nom :</span><?php echo $descriptif['lastname'];?><br>
<span>Prénom :</span><?php echo $descriptif['firstname'];?><br>
<span>Email :</span><?php echo $descriptif['email'];?><br>
<span>Tel :</span><?php echo $descriptif['phone'];?><br>
<span>Fixe :</span><?php echo $descriptif['phone_2'];?><br>
<span>Adresse :</span><?php echo $descriptif['address'];?><br>
<span>Ville :</span><?php echo $descriptif['city'];?><br>
<span>Code postal :</span><?php echo $descriptif['zip_code'];?><br>



<?php if(!empty($w_user)): ?>
<a href="<?php echo $this->url('Clients_modifyClient',['id' => $descriptif['id']]);?>" id="update" class="btn btn-warning">Modifier</a>
<a href="<?php echo $this->url('Market_client');?>" class="btn btn-info">Retour Accueil</a>

<?php else: ?>
<a href="<?php echo $this->url('Clients_deleteClient',['id' => $descriptif['id']]);?>" id="delete" class="btn btn-danger">Supprimer</a>
<a href="<?php echo $this->url('Clients_listClient');?>" class="btn btn-info">Retour Liste</a>
<?php endif; ?>
    </div>
</div>
</div>
</div>
</div>




<?php $this->stop('main_content') ?>

