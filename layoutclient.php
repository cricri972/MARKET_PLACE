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
			<h1><?= $this->e($title) ?></h1>
			<?php if (!isset($_SESSION['is_logged'])): ?>

    <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header" style="float:left;">
              <ul class="nav nav-pills">
                    <h4>
                    <a href="#" ><?php echo $shop['name'];?></a>
                    </h4>
                    
                    <address>
                    <a href="https://www.google.fr/maps/place/Hotel+L'Imp%C3%A9ratrice/@14.5585766,-61.0430813,12z/data=!4m8!1m2!2m1!1srestaurant+martinique!3m4!1s0x47f2fc77bca492a9:0x7b1f4a9e19d427a5!8m2!3d14.603774!4d-61.068431!5m1!1e1"><span class="glyphicon glyphicon-home"></span><?=$options['address'];?>
                    </a>
                    </address>
                                      
                <p><a href="tel:0696235225"><span class="glyphicon glyphicon-earphone"></span><?=$options['phone'];?></a></p>
              </ul>

        </div>
        
          
        <ul class="nav navbar-nav navbar-right">
            <form class="navbar-form inline-form" action="admin/login.php" method="post">


            <div id="email" class="input-group">
                <!--    <span class="input-md input-group-addon"><i class="glyphicon glyphicon-user"></i></span>-->
                <input id="email" type="text" class="form-control" name="email" placeholder="Email">
            </div>
            <br><br>

            <div id="password" class="input-group">
                <!-- <span class="input-md input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>-->
                <input type="password" class="form-control" name="password" placeholder="Mot de Passe">
            </div>
            <br><br>
                <input id="button" type="submit" class="btn btn-warning btn-md couleur" value="Connexion">
            <br><br>    
              <li><a id="contact" href="../contact.php"><span class="glyphicon glyphicon-envelope"> </span> Nous contacter</a></li>    
            </form>
        </ul><br>
         <ul class="nav navbar-nav navbar-right">
              
        </ul>
      </div>
           
            <div class="container" >
                <a class="navbar-brand" href="#">Madinina Market</a>
                
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li class="active"><a href="#">Liste</a></li>
                    <li><a href="#">Page 2</a></li>
                </ul>
            <form class="navbar-form navbar-left" style="float:left;">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                            </button>
                        </div>
                </div>
                
            </form>
            </div> 
    </nav>

<?php endif; ?>


		</header>

   

		<section>
			<?= $this->section('main_content') ?>
			

                       
    
  


<div class="container">
	<div class="row">
		<h2 class="col-xs-12">Boutiques</h2>
	</div><!-- /row -->
	<div class="row">
	    <div class="col-xs-12 col-sm-3">
	        <div class="list-group">
                <a href="#" class="list-group-item primary">
                     <img src="assets/img/Intersport_logo_logotype.png" style="height:60%; width:75%;">
                </a>
                <a href="#" class="list-group-item">
                     <img src="assets/img/Celio_logo_black.png" style="height:25px; width:150px;">
                </a>
                <a href="#" class="list-group-item">
                     <img src="assets/img/Samsung-Logo-Transparent-PNG.png" style="height:35px; width:230px;">
                </a>
                <a href="#" class="list-group-item">
                    Boutique 4
                </a>
                <a href="#" class="list-group-item">
                    Boutique 5
                </a>
                
            </div><!-- /list-group -->      
	    </div><!-- /col -->
	  
	</div><!-- /row -->
</div><!-- /container -->
  
		</section>

		<footer>
		</footer>
	</div>
	
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</body>
</html>