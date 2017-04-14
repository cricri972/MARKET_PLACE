<?php $this->layout('layoutadmin', ['title' => 'Liste utilisateurs']) ?>

<?php $this->start('main_content') ?>

<body>

	<br>
	<table>

		<thead>
			<tr>
				<th>N°</th>
				<th>Nom</th>
				<th>Prénom</th>
				<th>Boutique</th>
			</tr>
		</thead>

		<tbody>
			<!-- foreach permettant d'avoir une ligne <tr> par ligne SQL (pour chaque donnée de ma table item, on définit une valeur avec attribut-->
			<?php foreach($users as $user): ?>
				<tr>
					<td><?=$user['id']; ?></td>
					<td><?=$user['lastname']; ?></td>
					<td><?=$user['firstname']; ?></td>
					<td><?=$user['id_shop']; ?></td>
					<td>
					<a href="<?php echo $this->url('Users_viewUser', ['id' => $user['id']]) ;?>" class="btn btn-info">
						Détails
						</a>
						<a href="<?php echo $this->url('Market_admin');?>" class="btn btn-info">
						Retour Accueil
						</a>
					</td>
					<!-- <td>
					<a href="<?php echo $this->url('Users_viewUser', ['id' => $user['id']]) ;?>" class="btn btn-warning">
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