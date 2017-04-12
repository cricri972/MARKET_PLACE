<?php $this->layout('layoutadmin', ['title' => 'Détails utilisateur']) ?>

<?php $this->start('main_content') ?>

<?php if(isset($result)){
	echo $result; //on peut aussi écrire directement echo $result sans le if
	}?>
<p>N° :</p><?php echo $descriptif['id'];?>
<p>Nom :</p><?php echo $descriptif['lastname'];?>
<p>Prénom :</p><?php echo $descriptif['firstname'];?>
<p>Email :</p><?php echo $descriptif['email'];?>
<p>Rôle :</p><?php echo $descriptif['role'];?>
<p>Boutique :</p><?php echo $descriptif['id_shop'];?>
<br>
<a href="<?php echo $this->url('Users_deleteUser',['id' => $descriptif['id']]);?>" class="btn btn-warning">Supprimer</a>
<a href="<?php echo $this->url('Users_listUser');?>" class="btn btn-info">Retour liste</a>

<style>
    h1{
        width: 320px;
        border-radius: 10px;
        background-color: brown;
        color: aliceblue;
        padding: 10px;
        text-align: center;
    };
                
</style>

<?php $this->stop('main_content') ?>