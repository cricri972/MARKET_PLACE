<?php $this->layout('layout', ['title' => 'Mon panier']) ?>
<?php $this->start('main_content') ?>


<form method="post" action="basket.php">
	<table style="width: 400px">
		<thead>
			<tr>
				<th>Libellé</th>
				<th>Quantité</th>
				<th>Prix Unitaire</th>
				<th>Action</th>
			</tr>
		</thead>

	<?php var_dump($params); ?>

	<tbody>
		<?php //foreach($shop as $shoper): ?>
	</tbody>
	
	
	</table>

	
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