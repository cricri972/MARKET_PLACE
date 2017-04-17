<?php $this->layout('layoutadmin', ['title' => 'Détails du compte']) ?>

<?php $this->start ('head') ?>
<link rel="stylesheet" type="text/css" href="<?= $this->assetUrl('bootstrap-sweetalert/dist/sweetalert.css')?>">
<?php $this->stop ('head') ?>

<?php $this->start('main_content') ?>

<div class=container>
<div class="row">

       
        <div class="col-md-3" id="admincontrol" style="position:inherit";>  
                  <div class="col-md-3"> 
                    <h2>Administration</h2>
                </div><!-- /row -->
                <div class="row">
                    <div class="col-md-3 col-sm-12" id="shop">
                        <div class="list-group client">
                           
                            
                            <a href="<?=$this->url('Clients_listClient')?>" class="list-group-item primary">
                            Clients : gestion des clients       
                            </a>
                            
                            </div>
                        <div class="list-group shop">
                            <a href="<?=$this->url('shop_addShop')?>" class="list-group-item">
                            Boutiques : ajouter
                            </a>
                            
                            <a href="<?=$this->url('shop_listShop')?>" class="list-group-item">
                            Boutiques : gestion des boutiques  
                            </a>
                            
                            </div>
                        <div class="list-group user">
                            <a href="<?=$this->url('Users_addUser')?>" class="list-group-item">
                            Users : ajouter     
                            </a>
                            
                            <a href="<?=$this->url('Users_listUser')?>" class="list-group-item">
                            Users : gestion des users   
                            </a>
                            
                        </div><!-- /list-group -->      
                    </div><!-- /col -->
            </div>
        </div><!-- /row -->

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


<?php if(!empty($w_user)): ?>
<a href="<?php echo $this->url('Clients_modifyClient',['id' => $descriptif['id']]);?>" id="update" class="btn btn-warning">Modifier</a>
<a href="<?php echo $this->url('Market_client');?>" class="btn btn-info">Retour Accueil</a>

<?php else: ?>
<a href="<?php echo $this->url('Clients_deleteClient',['id' => $descriptif['id']]);?>" id="delete" class="btn btn-danger">Supprimer</a>
<a href="<?php echo $this->url('Clients_modifyClientByAdmin',['id' => $descriptif['id']]);?>" id="update" class="btn btn-warning">Modifier</a>
<a href="<?php echo $this->url('Clients_listClient');?>" class="btn btn-info">Retour Liste</a>
<?php endif; ?>
    </div>
</div>
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
              swal("Supprimé", "");
            });
        });
    });
</script>
<?php $this->stop('script') ?>