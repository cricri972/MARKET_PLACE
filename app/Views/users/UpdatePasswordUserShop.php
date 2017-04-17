
<?php $this->layout('layoutshop', ['title' => 'shop']) ?>

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
                            <a href="<?=$this->url('shop_addOrUpdateShopByShop')?>" class="list-group-item primary">
                            Modification information        
                            </a>
                             <a href="<?=$this->url('item_addItemShop')?>" class="list-group-item">
                            Ajouter article   
                            </a>
                            <a href="<?=$this->url('item_listItemByShop')?>"class="list-group-item">
                            Liste articles 
                            </a>   
                            <a href="#" class="list-group-item">
                            Voir article    
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




<div class="col-xs-9">    
<div class="container">
    <div class="col-xs-9 " id="login">
        <div class="row">
            <div class="col-xs-9">
             
<form class="form-horizontal" method="post" action="<?=$this->url('item_MailItemPsw');?>" id="form_clients">
  <fieldset>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-6 control-label" for="email">Email</label>
      
      <input id="email" name="email" type="email" placeholder="Veuillez saisir votre adresse email" class="form-control input-md">
      <br>
    </div>

    <div class="form-group">
      <label class="col-md-6 control-label" for="submit"></label>
      <div class="col-md-8">
        <button type="submit" class="btn btn-success">Envoyer</button>
      </div>
    </div>
  </fieldset>

</form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
 
 <?php $this->stop('main_content') ?>