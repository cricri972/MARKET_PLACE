<?php $this->layout('layoutclient', ['title' => 'J\'ai oublié mon mot de passe']) ?>

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
    
<div class="col-xs-9">    
<div class="container">
    <div class="col-xs-9 " id="login">
        <div class="row">
            <div class="col-xs-9">
             
<form class="form-horizontal" method="post" id="form_clients">
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
 </div>
<?php $this->stop('main_content') ?>