<?php $this->layout('layout', ['title' => 'Detail article']) ?>

<?php $this->start('main_content') ?>

	
	<br>
	<form class="form-horizontal" method="post" enctype="multipart/form-data">

			
			<div class="form-group">
				<label class="col-md-4 control-label" for="lastname">Nom et Prenom</label>
				<div class="col-md-4">
					<input type="text" id="Lastname" name="lastname" class="form-control input-md">
				</div>
			</div>
			
			<div class="form-group">
				<label class="col-md-4 control-label" for="email">email</label>
				<div class="col-md-4">
					<input type="text" id="email" name="email" class="form-control input-md">
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 control-label" for="sujet">sujet</label>
				<div class="col-md-4">
					<input type="text" id="sujet" name="sujet" class="form-control input-md">
				</div>
			</div>
           
            <div class="form-group">
			  <label class="col-md-4 control-label" for="content">Votre message</label>
			  <div class="col-md-4">                     
			    <textarea class="form-control" id="content" name="content" placeholder="mettre un contenu"></textarea>
			  </div>
			</div>
			

			
			<div class="form-group">
				<div class="col-md-4 col-md-offset-4">
					<button type="submit">envoyer email</button>
				</div>
			</div>
		</form>
	
	

<?php $this->stop('main_content') ?>
