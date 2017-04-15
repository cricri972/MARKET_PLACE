<?php $this->layout('layoutclient', ['title' => 'Liste des articles']) ?>

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



<div class="container">


<div class="row col-xs-9 col-sm-9">

	
	

	<table class="table table-striped ">
		<thead>
			<tr>
				<th>#</th>
				<th>Reference</th>
				<th>Titre</th>
				<th>Prix HT</th>
				<th>TVA</th>
				<th>stock</th>
				<th>Visualiser</th>

			</tr>
		</thead>
		<tbody>
			<?php foreach($items as $item): ?>
				<tr>
					<th><?=$item['id'];?></th>
					<th><?=$item['ref'];?></th>
					<th><?=$item['name'];?></th>
					<th><?=$item['price_ht'];?></th>
					<th><?=$item['taxes'];?> %</th>
					<th><?=$item['stock'];?></th>
					<th><button id="button1id" name="button1id" class="btn btn-success"><a href="<?php echo $this->url('Clients_viewItemClient', ['id' => $item['id']])?>">Visualiser</a></button></th>

					
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>
</div>
</div>
</div>
<?php $this->stop('main_content') ?>
