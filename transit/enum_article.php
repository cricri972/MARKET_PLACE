<!--article-->

<?php $this->layout('layout', ['title' => 'Article']) ?>
<?php $this->start('main_content') ?>


<article class="article">
	<div class = "row">
	<table class= "table table-striped">
		<thead>
			<tr>
				<th>#</th>
				<th>Titre</th>
				<th>Auteur</th>
				<th>Suppression</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach($articles as $article): ?>
			<tr>
				<th><?=$article['id'];?></th>
				<th><a href="<?= $this->url('detailArticle', ['id'=> $postId])?>"><?=$article['title'];?></a></th>
				<th><a href="<?/*= $this->url('detailArticle', ['id'=> $article['id']])*/ ?>">Auteur</a></th> <!-- lien à mettre -->
				<th><a href="">Supprimer</a></th>
			</tr>
		<?php endforeach; ?>
			
		</tbody>
	</table>
	</div>
</article>
	
<?php $this->stop('main_content') ?>


<?= $article['title'];?>


