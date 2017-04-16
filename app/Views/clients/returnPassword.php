<?php $this->layout('layoutclient', ['title' => 'Detail article']) ?>

<?php $this->start('main_content') ?>

	
	<h3>Merci de bien vouloir entrer votre nouveau mot de passe</h3>
	<form class="form-horizontal" method="post" enctype="multipart/form-data">

			
			<div class="form-group">
				<label class="col-md-4 control-label" for="new">Nouveau mot de passe</label>
				<div class="col-md-4">
					<input type="password" id="new" name="new" class="form-control input-md">
				</div>
			</div>
			
		<!-- 	<div class="form-group">
				<label class="col-md-4 control-label" for="controlNew">Confirme mot de passe</label>
				<div class="col-md-4">
					<input type="password" id="controlNew" name="controlNew" class="form-control input-md">
				</div>
			</div> -->
						
			<div class="form-group">
				<div class="col-md-4 col-md-offset-4">
					<button type="submit">Valider votre nouveau mot de passe svp</button>
				</div>
			</div>
		</form>
	
	

<?php $this->stop('main_content') ?>
