<?php $this->layout('layout', ['title' => 'Mon panier']) ?>
<?php $this->start('main_content') ?>


<form method="post" action="basket.php">
	<table style="width: 400px">
		<thead>
			<tr>
				<th>Réf.</th>
				<th>Libellé</th>
				<th>Quantité</th>
				<th>Prix Unitaire</th>
				<th>Action</th>
			</tr>
		</thead>

	<?php// var_dump($_SESSION); ?>
		<h1></h1>
	<?php // var_dump($item); ?>

	<tbody>
		<?php  //foreach($item as $shoper): ?>

			<tr>
				<!-- <th><?= $shoper['id'];?></th> -->
				<th><a href="<?= $this->url('item_ViewItem', ['id'=> $shoper['id']]); ?>"><?= $shoper['ref'];?></a></th>

				<th><a href="<?= $this->url('item_ViewItem', ['id'=> $shoper['id']]); ?>"><?= $shoper['name'];?></a></th>

				<th><input type="text" name="qty" value="<?= $shoper['qty'];?>" ></th>
				
				

				<th><a href="<?= $this->url('shop_mailToShop', ['id'=> $shoper['id']]); ?>"><?= $shoper['price_ht'];?></a></th>
				
				<th><a href="<?= $this->url('shop_deleteShop', ['id'=> $shoper['id']]);?>"><?= 'Supprimer';?></a></th>
				
			</tr>

		<?php // endforeach; ?>
		</tbody>

		
	</tbody>
	
	
	</table>

       <button class="btn btn-success"><a href="<?= $this->url('Market_accueilSlider');?>">Accueil</a></button>

       <a href="javascript:history.back()">Retour</a>	<!-- retour page precedente -->
	<?php
	/*
	if (creationbasket())
	{
		$nbArticles=count($_SESSION['basket']['name']);
		if ($nbArticles <= 0)
		echo "<tr><td>Votre basket est vide </ td></tr>";
		else
		{
			for ($i=0 ;$i < $nbArticles ; $i++)
			{
				echo "<tr>";
				echo "<td>".htmlspecialchars($_SESSION['basket']['name'][$i])."</ td>";
				echo "<td><input type=\"text\" size=\"4\" name=\"q[]\" value=\"".htmlspecialchars($_SESSION['basket']['qty'][$i])."\"/></td>";
				echo "<td>".htmlspecialchars($_SESSION['basket']['price'][$i])."</td>";
				echo "<td><a href=\"".htmlspecialchars("basket.php?action=suppression&l=".rawurlencode($_SESSION['basket']['name'][$i]))."\">XX</a></td>";
				echo "</tr>";
			}

			echo "<tr><td colspan=\"2\"> </td>";
			echo "<td colspan=\"2\">";
			echo "Total : ".MontantGlobal();
			echo "</td></tr>";

			echo "<tr><td colspan=\"4\">";
			echo "<input type=\"submit\" value=\"Rafraichir\"/>";
			echo "<input type=\"hidden\" name=\"action\" value=\"refresh\"/>";

			echo "</td></tr>";
		}
	}*/
	?>

</form>

<?php $this->stop('main_content') ?>