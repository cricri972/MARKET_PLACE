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
		        <header>
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
                               <span style="color:gray"><?php echo'Vous n\'êtes pas connecté '; ?></span>

                            <?php else: ?>

                                Bonjour <?=$w_user['firstname'];?>
                            <?php endif; ?>

                                <a href="<?=$this->url('Market_shop')?>" class="btn btn-warning btn-md couleur">Déconnexion&nbsp<span class="glyphicon glyphicon-log-in"></span></a>
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

 <!--  <nav class="social" >
          <ul>
              <li><a href="http://twitter.com">Twitter <i class="fa fa-twitter"></i></a></li>
              <li><a href="http://facebook.com">Facebook <i class="fa fa-facebook"></i></a></li>
              <li><a href="http://dribbble.com">Dribbble <i class="fa fa-dribbble"></i></a></li>
              <li><a href="http://gmail.com">Google <i class="fa fa-behance"></i></a></li>
              
          </ul>
      </nav>-->
          
		</section>
	


        <div class="container">
		<footer class="container col-md-12">
		   
		        <div class="social">
                <div class="row col-md-12">
                
                <fieldset> 
                    <legend>Nous rejoindre sur :</legend> 
                     <div class="form-group">       
                   
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
 	
 	   <style>
            a {
  color: #fff;
  text-decoration: none;
              
}

}
.social {
  position: fixed;
  margin-top: -100%;
            }
.social ul {
  padding: 0px;
  -webkit-transform: translate(-270px, 0);
  -moz-transform: translate(-270px, 0);
  -ms-transform: translate(-270px, 0);
  -o-transform: translate(-270px, 0);
  transform: translate(-270px, 0);
   margin-left: -270%;
  
}
.social ul li {
  display: block;
  
  margin: 25px;
  background: rgba(0, 0, 0, 0.36);
  width:300px;
  text-align: right;
  padding: 10px;
  -webkit-border-radius: 0 30px 30px 0;
  -moz-border-radius: 0 30px 30px 0;
  border-radius: 0 30px 30px 0;
  -webkit-transition: all 1s;
  -moz-transition: all 1s;
  -ms-transition: all 1s;
  -o-transition: all 1s;
  transition: all 1s;
}
.social ul li:hover {
  -webkit-transform: translate(110px, 0);
  -moz-transform: translate(110px, 0);
  -ms-transform: translate(110px, 0);
  -o-transform: translate(110px, 0);
  transform: translate(110px, 0);
  background: rgba(255, 255, 255, 0.4);
}
.social ul li:hover a {
  color: #000;
}
.social ul li:hover i {
  color: #fff;
  background: rgba(0, 0, 0, 0.36);
  -webkit-transform: rotate(360deg);
  -moz-transform: rotate(360deg);
  -ms-transform: rotate(360deg);
  -o-transform: rotate(360deg);
  transform: rotate(360deg);
  -webkit-transition: all 1s;
  -moz-transition: all 1s;
  -ms-transition: all 1s;
  -o-transition: all 1s;
  transition: all 1s;
}
.social ul li i {
  margin-left: 30px;
  color: #000;
  background: #fff;
  padding: 10px;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
  width: 20px;
  height: 20px;
  font-size: 20px;
  background: #ffffff;
  -webkit-transform: rotate(0deg);
  -moz-transform: rotate(0deg);
  -ms-transform: rotate(0deg);
  -o-transform: rotate(0deg);
  transform: rotate(0deg);
}


        </style>
	
	
<script src="<?= $this->assetUrl('js/jquery-3.2.0.min.js')?>"></script>
<script src="<?= $this->assetUrl('js/bootstrap.min.js')?>"></script>


 
        
</body>
</html>