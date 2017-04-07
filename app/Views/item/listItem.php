<?php $this->layout('layoutItems', ['title' => 'Liste des articles']) ?>

<?php $this->start('main_content') ?>
	
	<table>
		<thead>
			<tr>
				<th>#</th>
				<th>Reference</th>
				<th>Titre</th>
				<th>Prix HT</th>
				<th>stock</th>
				<th>Visualiser</th>
				<th>Supprimer</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach($items as $item): ?>
			<tr>
				<th><?=$item['id'];?></th>
				<th><?=$item['ref'];?></th>
				<th><?=$item['name'];?></th>
				<th><?=$item['price_ht'];?></th>
				<th><?=$item['stock'];?></th>
				<th><button id="button1id" name="button1id" class="btn btn-success"><a href="<?php echo $this->url('item_ViewItem', ['id' => $item['id']])?>">Visualiser</a></button></th>
				<th><button id="button1id" name="button1id" class="btn btn-danger"><a href="<?php echo $this->url('item_DeleteItem', ['id' => $item['id']])?>">Supprimer</a></button></th>
				<th><button id="button1id" name="button1id" class="btn "><a href="<?php echo $this->url('item_UpdateItem', ['id' => $item['id']])?>">Modifier</a></button></th>
				
			</tr>
		<?php endforeach; ?>
			
		</tbody>
	</table>

<?php $this->stop('main_content') ?>