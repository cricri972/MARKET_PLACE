<?php $this->layout('layoutadmin', ['title' => 'Détails Client']) ?>

<?php $this->start ('head') ?>
<link rel="stylesheet" type="text/css" href="<?= $this->assetUrl('bootstrap-sweetalert/dist/sweetalert.css')?>">
<?php $this->stop ('head') ?>


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
<a href="<?php echo $this->url('Clients_deleteClient',['id' => $descriptif['id']]);?>" id="delete" class="btn btn-danger">Supprimer</a>
<a href="<?php echo $this->url('Clients_modifyClient',['id' => $descriptif['id']]);?>" id="update" class="btn btn-warning">Modifier les infos</a>
<a href="<?php echo $this->url('Clients_listClient');?>" class="btn btn-info">Retour liste</a>

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


<?php $this->start('script') ?>
<script src="<?= $this->assetUrl('bootstrap-sweetalert/dist/sweetalert.min.js') ?>"></script>
<script>
    $(function()
    {
        $('#delete').click(function(e){
            e.preventDefault();
            swal({
              title: "Etes-vous sûr?",
              text: "Vous ne pourrez par récupérer ces données",
              type: "warning",
              showCancelButton: true,
              confirmButtonColor: "#DD6B55",
              confirmButtonText: "Oui, supprimer",
              closeOnConfirm: false,
              html: false
            }, function(){
                // AJAX de suppression
              swal("Supprimé", "success");
            });
        });
    });
</script>
<?php $this->stop('script') ?>