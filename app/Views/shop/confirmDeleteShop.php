<?php $this->layout('layout', ['title' => 'Confirmation suppression']) ?>
<?php $this->start('main_content') ?>

<article class="confirmDelete">
	<form method="post" class="form-horizontal" id='form_shop' enctype="multipart/form-data">
		<label class="col-md-3 control-label" for="delConfirm">Confirmez-vous la suppression ?</label>  
    <div class="col-md-3">
        <input id="delConfirm" name="delConfirm" type="text" placeholder="Saisissez \'oui\' ou 'non'" class="form-control input-md">
    </div>	
</article>

<?php $this->stop('main_content') ?>