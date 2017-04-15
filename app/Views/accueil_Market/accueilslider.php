<?php $this->layout('layoutclient', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>

	
<div class="container-full" id="marketcarousel" >
    <div class="row">
        <div class="col-sm-12" id="column">
        	<!-- Le slider/carousel de bootstrap -->
				<div id="Market" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
					<li data-target="#Market" data-slide-to="0" class="active"></li>
					<li data-target="#Market" data-slide-to="1"></li>
					<li data-target="#Market" data-slide-to="2"></li>
					<li data-target="#Market" data-slide-to="3"></li>
					<li data-target="#Market" data-slide-to="4"></li>
				</ol>

				            <div class="carousel-inner container-full" role="listbox" id="caroussel" >
								<div class="item active">
									<img src="<?= $this->assetUrl('img/Intersport.jpg') ;?>" alt="Market1"  >
										<div class="carousel-caption">
										    
									     </div>
								</div>
								<div class="item">
									<img src="<?php echo $this->assetUrl('img/Carrefour.jpg') ;?>" alt="Market 2">
										<div class="carousel-caption">
										    
									    </div>
								</div>
								<div class="item">
									<img src="<?= $this->assetUrl('img/M_Bricolage.jpg') ;?>" alt="Market 3">
										<div class="carousel-caption">
										    
									    </div>
                                </div> 
                                <div class="item">
									<img src="<?= $this->assetUrl('img/Sun_Records.jpg') ;?>" alt="Market 4">
										<div class="carousel-caption">
										    
									    </div>
                                </div>
                                <div class="item">
									<img src="<?= $this->assetUrl('img/LaGrandeRecre.jpg') ;?>" alt="Market 5">
										<div class="carousel-caption">
										    
					        </div>
                        </div>     
                    </div>
                </div>	
            </div>           
        </div>
    </div>
  

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
           <!-- /container -->

   <!--END-SHOP-->

   <!--END-SHOP-->		

<div class="col-md-8">

    <div class="row" id="item-picture">
	    
	    <div class="col-xs-12 col-sm-12">
	        <div class="row">
               
                <div class="col-xs-9 col-sm-4">
                        <?php $item['id']= 22; ?>
                        <a href="<?= $this->url('order_createBasket', ['id'=> $item['id']]); ?>" class="thumbnail">
                          <img src="<?= $this->assetUrl('img/271AGCI-Ptt.jpg');?>">
                        </a>
                </div><!-- /col -->
                <div class="col-xs-9 col-sm-4">
                		<?php $item['id']= 19; ?>
                        <a href="<?= $this->url('order_createBasket', ['id'=> $item['id']]); ?>" class="thumbnail">
                          <img src="<?= $this->assetUrl('img/8322471-Ptt.jpg');?>">
                        </a>
                </div><!-- /col -->
                <div class="col-xs-9 col-sm-4">
                        <a href="#" class="thumbnail">
                          <img src="<?= $this->assetUrl('img/8197441-Ptt.jpg');?>">
                        </a>
                </div><!-- /col -->
	        </div><!-- /row -->
	        <div class="row">
                <div class="col-xs-9 col-sm-4">
                        <a href="#" class="thumbnail">
                          <img src="<?= $this->assetUrl('img/8386346-Ptt.jpg');?>">
                        </a>
                </div><!-- /col -->
                <div class="col-xs-9 col-sm-4">
                        <a href="#" class="thumbnail">
                          <img src="<?= $this->assetUrl('img/BMKeter-Ptt.jpg') ;?>">
                        </a>
                </div><!-- /col -->
                <div class="col-xs-9 col-sm-4">
                        <a href="#" class="thumbnail">
                           <img src="<?= $this->assetUrl('img/310263.jpg') ;?>">
                         <!-- <img src="//placehold.it/250x350">-->
                        </a>
                </div><!-- /col -->
	        </div><!-- /row -->
	    </div><!-- /col -->
	</div><!-- /row -->
</div><!-- /container -->
	</div>
            </div>
 

<?php $this->stop('main_content') ?>