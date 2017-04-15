	
<?php $this->layout('layoutshop', ['title' => 'shop']) ?>

<?php $this->start('main_content') ?>

  <div class="container col-md-3" id="boutique" style="position:inherit;">
               <div class="col-md-12">
                <div class="row ">
                    <h2 >Gérer ma Boutique</h2>
                </div>
                <div class="col-md-12 " id="shop">
                <div class="row">
                   
                        <div class="list-group">
                            <a href="<?=$this->url('shop_listShop')?>" class="list-group-item primary">
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
                             <a href="#" class="list-group-item">
                               
                            </a>
                             <a href="#" class="list-group-item">
                              
                            </a>
                             <a href="#" class="list-group-item">
                                
                            </a>
                             <a href="#" class="list-group-item">
                               
                            </a>
                           
                        </div><!-- /list-group -->      
                    </div><!-- /col -->

                </div><!-- /row -->
      </div>      </div><!-- /container -->
            



<?php $this->stop('main_content') ?>