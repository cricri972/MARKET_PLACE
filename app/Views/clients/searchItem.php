<?php $this->layout('layoutclient', ['title' => 'Liste des articles']) ?>

<?php $this->start('main_content') ?>
<div class="container-fluid pull-right">

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
<?php $this->stop('main_content') ?>
