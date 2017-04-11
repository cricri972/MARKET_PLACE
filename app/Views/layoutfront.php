<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>
    <!-- INTEGRATION Bootstrap CSS -->
         <link rel="stylesheet" href="assets/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
</head>
<body>
	<div class="container">
		<header>
			<h1>W :: <?= $this->e($title) ?></h1>
		</header>

   
<?php if (!isset($_SESSION['is_logged'])): ?>

    <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header" style="float:left;">
              <ul class="nav nav-pills">
                    <h4>
                    <a href="index.php" ><?php echo $shop['name'];?></a>
                    </h4>
                    
                    <address>
                    <a href="https://www.google.fr/maps/place/Hotel+L'Imp%C3%A9ratrice/@14.5585766,-61.0430813,12z/data=!4m8!1m2!2m1!1srestaurant+martinique!3m4!1s0x47f2fc77bca492a9:0x7b1f4a9e19d427a5!8m2!3d14.603774!4d-61.068431!5m1!1e1"><span class="glyphicon glyphicon-home"></span><?=$options['address'];?>
                    </a>
                    </address>
                                      
                <p><a href="tel:0696235225"><span class="glyphicon glyphicon-earphone"></span><?=$options['phone'];?></a></p>
              </ul>

        </div>
        
        
         
            
            
       
        <ul class="nav navbar-nav navbar-right" style="float:left;">
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

<?php if (isset($_SESSION) && $_SESSION['is_logged']==true): ?>

<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
        <ul class="nav nav-pills">
                    <h3>
                    <a href="home_page.php"><span class="glyphicon glyphicon-glass"></span><?php echo $shop['name'];?></a>
                    </h3>
                   
                    <address>
                    <a href="https://www.google.fr/maps/place/Hotel+L'Imp%C3%A9ratrice/@14.5585766,-61.0430813,12z/data=!4m8!1m2!2m1!1srestaurant+martinique!3m4!1s0x47f2fc77bca492a9:0x7b1f4a9e19d427a5!8m2!3d14.603774!4d-61.068431!5m1!1e1"><span class="glyphicon glyphicon-home"></span><?=$shop['address'];?></a>
                    </address>
                                      
                <p><a href="tel:0696235225"><span class="glyphicon glyphicon-earphone"></span><?=$shop['phone'];?></a></p>
              </ul>
    </div>

          
    <ul class="nav navbar-nav navbar-right">
           <li>
             <a id="user" href=""><span class="glyphicon glyphicon-user"></span>  <?php echo 'Bonjour'.' '.$_SESSION['firstname'];?>
             </a>            
          </li>
          
          <li><a id="contact" href="../contact.php"><span class="glyphicon glyphicon-envelope"> </span> Nous contacter</a></li>
       
          <li><a id="deconect" href="../admin/logout.php"><span class="glyphicon glyphicon-log-out"></span> Me déconnecter</a></li>
          
    </ul>
  </div>
</nav>

  
<div class="carous">
    <div class="container-full">
       <div class="col-sm-12" id="column">

						

						<!-- Le slider/carousel de bootstrap -->
						<div id="Market" class="carousel slide" data-ride="carousel" style="margin-top:-20px;">
							<ol class="carousel-indicators">
								<li data-target="#Market" data-slide-to="0" class="active"></li>
								<li data-target="#Market" data-slide-to="1"></li>
								<li data-target="#Market" data-slide-to="2"></li>
								<li data-target="#Market" data-slide-to="3"></li>
								<li data-target="#Market" data-slide-to="4"></li>
							</ol>

							<div class="carousel-inner container-full" role="listbox" id="caroussel">
								<div class="item active">
									<img src="assets/img/<?php echo $options['cover1'] ;?>" alt="Market 1"  >
										<div class="carousel-caption">
										    
									    </div>
								</div>
								<div class="item ">
									<img src="assets/img/<?php echo $options['cover2'] ;?>" alt="Market 2">
										<div class="carousel-caption"Market>
										    
									    </div>
								</div>
								<div class="item">
									<img src="assets/img/<?php echo $options['cover3'] ;?>" alt="Market 3">
										<div class="carousel-caption">
										    
									    </div>
                                </div> 
                                <div class="item">
									<img src="assets/img/<?php echo $options['cover4'] ;?>" alt="Market 4">
										<div class="carousel-caption">
										    
									    </div>
                                </div>
                                <div class="item">
									<img src="assets/img/<?php echo $options['cover5'] ;?>" alt="Market 5">
										<div class="carousel-caption">
										    
									    </div>
                                </div>     
                            </div>
                        </div>	
                       
        </div>
    </div>
</div>  

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
	    <div class="col-xs-12 col-sm-9">
	        <div class="row">
                <div class="col-xs-12 col-sm-4">
                        <a href="#" class="thumbnail">
                          <img src="//placehold.it/300x450">
                        </a>
                </div><!-- /col -->
                <div class="col-xs-12 col-sm-4">
                        <a href="#" class="thumbnail">
                          <img src="//placehold.it/300x450">
                        </a>
                </div><!-- /col -->
                <div class="col-xs-12 col-sm-4">
                        <a href="#" class="thumbnail">
                          <img src="//placehold.it/300x450">
                        </a>
                </div><!-- /col -->
	        </div><!-- /row -->
	        <div class="row">
                <div class="col-xs-12 col-sm-4">
                        <a href="#" class="thumbnail">
                          <img src="//placehold.it/300x450">
                        </a>
                </div><!-- /col -->
                <div class="col-xs-12 col-sm-4">
                        <a href="#" class="thumbnail">
                          <img src="//placehold.it/300x450">
                        </a>
                </div><!-- /col -->
                <div class="col-xs-12 col-sm-4">
                        <a href="#" class="thumbnail">
                          <img src="//placehold.it/300x450">
                        </a>
                </div><!-- /col -->
	        </div><!-- /row -->
	    </div><!-- /col -->
	</div><!-- /row -->
</div><!-- /container -->
  
		<section>
			<?= $this->section('main_content') ?>
		</section>

		<footer>
		</footer>
	</div>
	
	


 <script src="assets/js/jquery-3.2.0.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	</body>
  </html>
