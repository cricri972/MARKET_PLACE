<?php $this->layout('layoutadmin', ['title' => 'Détails Client']) ?>

<?php $this->start('main_content') ?>

<?php if(isset($result)){
	echo $result; //on peut aussi écrire directement echo $result sans le if
	}?>
<p>N° :</p><?php echo $descriptif['id'];?>
<p>Pseudo :</p><?php echo $descriptif['pseudo'];?>
<p>Nom :</p><?php echo $descriptif['lastname'];?>
<p>Prénom :</p><?php echo $descriptif['firstname'];?>
<p>Email :</p><?php echo $descriptif['email'];?>
<p>Tel :</p><?php echo $descriptif['phone'];?>
<p>Fixe :</p><?php echo $descriptif['phone_2'];?>
<p>Adresse :</p><?php echo $descriptif['address'];?>
<p>Ville :</p><?php echo $descriptif['city'];?>
<p>Code postal :</p><?php echo $descriptif['zip_code'];?>
<br>
<a href="<?php echo $this->url('Clients_deleteClient',['id' => $descriptif['id']]);?>" class="btn btn-warning">Supprimer</a>
<a href="<?php echo $this->url('Clients_listClient');?>" class="btn btn-info">Retour liste</a>


<?php $this->stop('main_content') ?>