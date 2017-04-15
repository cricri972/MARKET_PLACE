<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
	
	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
	
	
    
</head>


<body>
 
	<div class="container">
		        <header >
			      <div class="row">
	                <div class="col-md-12">
			            <nav class="navbar navbar-inverse navbar-fixed-top">
                        <div class="row">
                            <div class="container">
                            <div class="navbar-header" >
                       <ul class="nav nav-pills">
                        
                        <a href="#"><img src ="<?= $this->assetUrl('img/logo1.png') ?>" class="logo"></a>
                         
                           
                    </ul>
                        
                      
                        
                </div>
                    <div class="menu">
                     <a class="navbar-brand" href="#">Madinina Market</a>
                      
                       
                    <form class="navbar-form navbar-left" method="post" action="<?=$this->url('item_searchItems');  ?>">
                        <div class="input-group">
                            <input type="text" class="form-control" name="recherche" placeholder="Rechercher un produit">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit">
                                        <i class="glyphicon glyphicon-search"></i>
                                    </button>
                                </div>
                        </div>

                    </form>
                   
                   
                          
                        <ul class="nav navbar-nav navbar-right" id="button-right">
                            <form class="navbar-form inline-form"  method="post">

                            <?php if(empty($w_user)): ?>
                               <!-- <a href="<?//=$this->url('Users_loginUser')?>" class="btn btn-warning btn-md couleur">Accès membre&nbsp<span class="glyphicon glyphicon-user"></span></a>-->

                            <?php else: ?>

                                Bonjour <?=$w_user['firstname']; ?>
                            <?php endif; ?>

                                <a href="<?=$this->url('Users_logoutUser')?>" class="btn btn-warning btn-md couleur">Déconnexion&nbsp<span class="glyphicon glyphicon-log-in"></span></a>
                            </form>
                        </ul>
                   
                    </div>
               
            </div>
                            </div>
         
                        </nav>
                      </div>
                    </div>
    </header>

   

		<section>
			<?= $this->section('main_content') ?>


          
		</section>
	


		 <div class="container">
		<footer class="container col-md-12">
		   
		        <div class="social">
                <div class="row col-md-12">
                
                <fieldset> 
                    <legend>Nous rejoindre sur :</legend> 
                     <div class="form-group">       
                    <ul class="fa-ul"> 
                      <li><i class="fa-li fa fa-twitter"></i> Twitter</li> 
                      <li><i class="fa-li fa fa-facebook-official"></i> Facebook</li> 
                      <li><i class="fa-li fa fa-google-plus"></i> Google +</li> 
                      <li><i class="fa-li fa fa-youtube-play"></i> Youtube</li> 
                    </ul>
                 </div>
                 </fieldset>           
                </div>
                </div>
              
                <div class="newletter">
                    <div class="row col-md-12">
                    <br>
                    <fieldset>
                        <legend>Newletters</legend>
                    
                    <div class="form-group">                 
                        <input type="text" name="firstname" placeholder="Nom" class="form-control">
                    </div>
                   <div class="form-group">                 
                        <input type="text" name="lastname" placeholder="Prenom" class="form-control">
                    </div>
                   <div class="form-group">
                        <input type="email" class="form-control" id="email" placeholder="Saisissez votre email">
                    </div> 
                    <div class="form-group">  
                        <textarea name="observation" rows=auto cols="auto"  class="form-control" placeholder="Avez-vous des Observations ?"></textarea>        
                    </div>
                    <div class="form-group">  
                    <input type="submit" class="btn btn-warning btn-md pull-left " value="Envoyer mes informations">
                    </div>
                    </fieldset>
                   </div>
                </div>
                 
                 
                <div class="contact">
                    <div class="row col-md-12">
                    <fieldset>
                        <legend>Contactez nous</legend>
                    <address>
                                               
                        <br>
                       
                        <a href="tel:+596524549"><span class="glyphicon glyphicon-earphone"></span>&nbsp 0596 55 20 00</a>
                        <br>
                        <a href="mailto:marketplace.martinique@shock.mq"><span class="glyphicon glyphicon-envelope"></span>&nbsp market.martinique@shock.mq</a>
                        <br>
                      
                        <a href="https://www.google.fr/maps/place/Tour+Lumina/@14.6016196,-61.0744052,18z/data=!4m15!1m9!4m8!1m0!1m6!1m2!1s0x8c6aa718d7fa4431:0xfdf47baf527e0a32!2sTour+Lumina,+3+Avenue+Loulou+Boilaville,+Fort-de-France,+Martinique!2m2!1d-61.0733001!2d14.6016196!3m4!1s0x8c6aa718d7fa4431:0xfdf47baf527e0a32!8m2!3d14.6016196!4d-61.0733001"> <span class="glyphicon glyphicon-home"></span>&nbsp Tour Lumina</a><br>
                        &nbsp&nbsp&nbsp&nbsp 97200<br>
                        &nbsp&nbsp&nbsp&nbsp Fort de France<br>
                        <br>
                        <br>
                      
                        
                        <div class="cgv">
                        <a href="<?= $this->assetUrl('img/CGV.pdf') ?>">Conditions Générales de Vente</a>
                        </div>
                    </address>
                    </fieldset>
                </div>
                </div> 
            
		</footer>
	</div>
	</div>
 	
	
	
<script src="<?= $this->assetUrl('js/jquery-3.2.0.min.js')?>"></script>
<script src="<?= $this->assetUrl('js/bootstrap.min.js')?>"></script>


 
        
</body>
</html>