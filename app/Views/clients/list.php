<?php $this->layout('layoutadmin', ['title' => 'Liste clients']) ?>

<?php $this->start('main_content') ?>

<body>

	<br>
	<table>

		<thead>
			<tr>
				<th>N°</th>
				<th>Pseudo</th>
				<th>Nom</th>
				<th>Prénom</th>
			</tr>
		</thead>

		<tbody>
			<!-- foreach permettant d'avoir une ligne <tr> par ligne SQL (pour chaque donnée de ma table item, on définit une valeur  avec attribut-->
			<?php foreach($clients as $client): ?>
				<tr>
					<td><?=$client['id']; ?></td>
					<td><?=$client['pseudo']; ?></td>
					<td><?=$client['lastname']; ?></td>
					<td><?=$client['firstname']; ?></td>
					<td>
					<a href="<?php echo $this->url('Clients_viewClient', ['id' => $client['id']]);?>" class="btn btn-info">
						Détails du compte
						</a>
					</td>
					<!-- <td>
					<a href="<?php //echo $this->url('Clients_viewClient', ['id' => $client['id']]);?>" class="btn btn-warning">
						Supprimer
						</a>
					</td> -->
				</tr>

				
			<?php endforeach; ?>
			
			<style>
                h1{
                    width: 320px;
                    border-radius: 10px;
                    background-color: brown;
                    color: aliceblue;
                    padding: 10px;
                    text-align: center;
                }
                

            </style>
		</tbody>
	</table>

</body>
</html>

<?php $this->stop('main_content') ?>