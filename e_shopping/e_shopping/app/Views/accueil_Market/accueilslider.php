<?php $this->layout('layoutclient', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>

	
    <div class="container-full" id="marketcarousel" >
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
									<img src="<?= $this->assetUrl('img/intersport-bandeauok.jpg') ;?>" alt="Market1"  >
										<div class="carousel-caption">
										    
									    </div>
								</div>
								<div class="item">
									<img src="<?php echo $this->assetUrl('img/Grande recre-bandeau.jpg') ;?>" alt="Market 2">
										<div class="carousel-caption">
										    
									    </div>
								</div>
								<div class="item">
									<img src="<?= $this->assetUrl('img/Mango-bandeau.jpg') ;?>" alt="Market 3">
										<div class="carousel-caption">
										    
									    </div>
                                </div> 
                                <div class="item">
									<img src="<?= $this->assetUrl('img/s12_mm_samsung_dream_lancement_bhp.jpg') ;?>" alt="Market 4">
										<div class="carousel-caption">
										    
									    </div>
                                </div>
                                <div class="item">
									<img src="<?= $this->assetUrl('img/Celio-bandeau.jpg') ;?>" alt="Market 5">
										<div class="carousel-caption">
										    
									    </div>
                                </div>     
                            </div>
                        </div>	
                       
        </div>
    </div>
  

<div class="container">
		<div class="row">
	    
	    <div class="col-xs-9 col-sm-9">
	        <div class="row" style="float:left;" >
                <div class="col-xs-9 col-sm-4">
                        <a href="#" class="thumbnail">
                          <img src="//placehold.it/300x450">
                        </a>
                </div><!-- /col -->
                <div class="col-xs-9 col-sm-4">
                        <a href="#" class="thumbnail">
                          <img src="//placehold.it/300x450">
                        </a>
                </div><!-- /col -->
                <div class="col-xs-9 col-sm-4">
                        <a href="#" class="thumbnail">
                          <img src="//placehold.it/300x450">
                        </a>
                </div><!-- /col -->
	        </div><!-- /row -->
	        <div class="row">
                <div class="col-xs-9 col-sm-4">
                        <a href="#" class="thumbnail">
                          <img src="//placehold.it/300x450">
                        </a>
                </div><!-- /col -->
                <div class="col-xs-12 col-sm-4">
                        <a href="#" class="thumbnail">
                          <img src="//placehold.it/300x450">
                        </a>
                </div><!-- /col -->
                <div class="col-xs-9 col-sm-4">
                        <a href="#" class="thumbnail">
                          <img src="//placehold.it/300x450">
                        </a>
                </div><!-- /col -->
	        </div><!-- /row -->
	    </div><!-- /col -->
	</div><!-- /row -->
</div><!-- /container -->
	


<?php $this->stop('main_content') ?>