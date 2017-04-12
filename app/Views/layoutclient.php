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

        
    <!-------------------------------------------------------------------------------------------	
                        
                                        HEADER    
    
    --------------------------------------------------------------------------------------------->		


	<div class="container">
	
		<header>
			
			<nav class="navbar navbar-inverse">
              <div class="container">
                <div class="navbar-header" >
                    <ul class="nav nav-pills">
                        
                        <a href="#"><img src ="<?= $this->assetUrl('img/logo1.png') ?>" class="logo"></a>
                          <h4>Commander en ligne<br> 
                        Retirer en Boutique</h4>   
                    </ul>
                        
                      
                        
                </div>
                    <div class="menu">
                     <a class="navbar-brand" href="#">Madinina Market</a>
                      
                       
                    <form class="navbar-form navbar-left" >
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Rechercher un produit">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit">
                                        <i class="glyphicon glyphicon-search"></i>
                                    </button>
                                </div>
                        </div>

                    </form>
                   
                    <ul class="nav navbar-nav navbar-right" id="button-right">
                        <form class="navbar-form inline-form"  method="post">
                           <button id="button" type="submit" class="btn btn-warning btn-md couleur" value="Accès membre"><a href="<?=$this->url('Clients_loginClient')?>">Accès membre&nbsp<span class="glyphicon glyphicon-user"></span></a></button> 
                            
                            <button id="button" type="submit" action="#" class="btn btn-warning btn-md couleur" value="Inscrivez vous"><a href="<?=$this->url('Clients_addClient')?>">Inscrivez vous<span></span></a></button>
                        
               
                            <button id="button" type="submit" action="#"  class="btn btn-warning btn-md couleur" value="Mon Panier">Mon Panier&nbsp&nbsp<span class="glyphicon glyphicon-shopping-cart"></span></button>
                   
                        
                        </form>
                    </ul>
                    </div>
               
            </div>
              
            </nav>

    <!---------------------------------------------------------------------------------------	
                        
                                        END-HEADER    
    
     --------------------------------------------------------------------------------------->		



    </header>

   

		<section>
			<?= $this->section('main_content') ?>

   <!---------------------------------------------------------------------------------------	
                        
                                        SHOP    
    
   --------------------------------------------------------------------------------------->		

            <div class="container-fluid pull-left" id="boutique">
                <div class="row">
                    <h2 class="col-xs-12">Boutiques</h2>
                </div><!-- /row -->
                <div class="row">
                    <div class="col-xs-3 col-sm-12" id="shop">
                        <div class="list-group">
                            <a href="#" class="list-group-item primary">
                               
                                <img src="<?= $this->assetUrl('img/M_BricolagePtt.jpg') ;?>">
                            </a>
                            <a href="#" class="list-group-item">
                                
                                <img src="<?= $this->assetUrl('img/IntersportPtt.jpg') ;?>">
                            </a>
                            <a href="#" class="list-group-item">
                               
                                <img src="<?= $this->assetUrl('img/Sun_RecordsPtt.jpg') ;?>">
                            </a>
                            <a href="#" class="list-group-item">
                                <img src="<?= $this->assetUrl('img/LaGrandeRecreBleu-Ptt.jpg') ;?>">
                            </a>
                            <a href="#" class="list-group-item">
                                <img src="<?= $this->assetUrl('img/CarrefourPtt.jpg') ;?>">
                            </a>
                            <a href="#" class="list-group-item">
                                <img src="<?= $this->assetUrl('img/Mango.jpg') ;?>">
                            </a>
                             <a href="#" class="list-group-item">
                                <img src="<?= $this->assetUrl('img/lacoste.jpg') ;?>">
                            </a>
                             <a href="#" class="list-group-item">
                                <img src="<?= $this->assetUrl('img/Samsung.jpg') ;?>">
                            </a>
                             <a href="#" class="list-group-item">
                                Boutique 9
                            </a>
                             <a href="#" class="list-group-item">
                                Boutique 10
                            </a>
                             <a href="#" class="list-group-item">
                                Boutique 11
                            </a>
                           
                        </div><!-- /list-group -->      
                    </div><!-- /col -->

                </div><!-- /row -->
            </div><!-- /container -->
            
   <!------------------------------------------------------------------------------------------	
                        
                                       END-SHOP    
    
   -------------------------------------------------------------------------------------------->		
		</section>

   <!------------------------------------------------------------------------------------------	
                        
                                       FOOTER    
    
   -------------------------------------------------------------------------------------------->		


		<footer class="container-full col-sm-12">
		    <div class="row col-sm-4">
		        <div class="gmap">
                
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247065.12849330145!2d-61.159906857044476!3d14.633639839708833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c6aa0f90066070d%3A0xe1001b1217afe7b0!2sMartinique!5e0!3m2!1sfr!2sfr!4v1483542076333" width="300" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
                <div class="newletter row col-sm-4">
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
                 
                 
                <div class="contact">
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
                        <br>
                        <br>
                        <div class="cgv">
                        <a href="<?= $this->assetUrl('img/CGV-SAMPLE.pdf') ?>">Conditions Générales de Vente</a>
                        </div>
                    </address>
                    </fieldset>
                </div> 
		
		</footer>
	</div>
    <!-----------------------------------------------------------------------------------------	
                        
                                       END-FOOTER   
    
    ------------------------------------------------------------------------------------------->		
	
	
<script src="<?= $this->assetUrl('js/jquery-3.2.0.min.js')?>"></script>
<script src="<?= $this->assetUrl('js/bootstrap.min.js')?>"></script>


 
        
</body>
</html>