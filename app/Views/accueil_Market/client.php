
		
<?php $this->layout('layoutclient', ['title' => 'admin']) ?>

<?php $this->start('main_content') ?>

<div class="container-fluid pull-right" id="item-picture">
		<div class="row">
	    
	    <div class="col-xs-12 col-sm-12">
	        <div class="row">
               
                <div class="col-xs-9 col-sm-4">
                        <a href="#" class="thumbnail">
                          <img src="<?= $this->assetUrl('img/271AGCI-Ptt.jpg');?>">
                        </a>
                </div><!-- /col -->
                <div class="col-xs-9 col-sm-4">
                        <a href="#" class="thumbnail">
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
                <div class="col-xs-12 col-sm-4">
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


<?php $this->stop('main_content') ?>