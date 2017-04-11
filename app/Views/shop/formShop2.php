<?php $this->layout('layout', ['title' => 'Ajouter une boutique']) ?>
<?php $this->start('main_content') ?>

<main class="container">

  <h1>Ajout de la boutique</h1>
  <br>

  <form class="form-horizontal" id='form_shop' enctype="multipart/form-data">"
<fieldset>

<!-- Form Name -->
<legend>FICHE BOUTIQUE</legend>

<!-- Text input-->
<div class="form-group">
    <label <!-- class="col-md-4 " for="name">Nom</label>  
    <div class="col-md-4">
        <input id="name" name="name" type="text" placeholder="Saisissez votre Nom" class="form-control input-md">
    </div>

<!-- <div class="form-group"> -->
    <label class="col-md-4 control-label" for="commercialName">Nom commercial</label>  
    <div class="col-md-4">
        <input id="commercialName" name="commercialName" type="text" placeholder="Nom de la boutique" class="form-control input-md">
    </div>

    <label <!-- class="col-md-4 control-label --> " for="name">Raison Sociale</label>  
    <div class="col-md-4">
        <input id="raisonSocial" name="raisonSocial" type="text" placeholder="Dénomination Administrative" class="form-control input-md">
    </div>

<!-- <div class="form-group"> -->
    <label class="col-md-4 control-label" for="immatriculation">Immatriculation au RC</label>  
    <div class="col-md-4">
        <input id="immatriculation" name="immatriculation" type="text" placeholder="N° SIRET, ex. 404 833 048 00022" class="form-control input-md">
    </div>

<label class="col-md-4 control-label" for="apeCode">Code APE</label>  
    <div class="col-md-4">
        <input id="apeCode" name="apeCode" type="text" placeholder="47.51Z, 47.63Z... " class="form-control input-md">
    </div>


<fieldset> Contact

<label class="col-md-4 control-label" for="nameGerant">Gérant</label>  
    <div class="col-md-4">
        <input id="nameGerant" name="nameGerant" type="text" placeholder="Prénom Nom du gérant" class="form-control input-md">
    </div>
<label class="col-md-4 control-label" for="email">Adresse Email</label>  
    <div class="col-md-4">
        <input id="email" name="email" type="email" placeholder="ex. donaldtrompe@tentivement.bar" class="form-control input-md">
    </div>
</fieldset>

<label class="col-md-4 control-label" for="adress">Gérant</label>  
    <div class="col-md-4">
        <input id="adress" name="adress" type="text" placeholder="N°, Rue, Impasse..." class="form-control input-md">
    </div>
<label class="col-md-4 control-label" for="city">Ville</label>  
    <div class="col-md-4">
        <input id="city" name="city" type="text" placeholder="Ville" class="form-control input-md">
    </div>
<label class="col-md-4 control-label" for="zipcode">Code Postal</label>  
    <div class="col-md-4">
        <input id="zipcode" name="zipcode" type="text" placeholder="97200" class="form-control input-md">
    </div>
<label class="col-md-4 control-label" for="cover">Images Société</label>  
    <div class="col-md-4">
        <input id="cover" name="cover" type="text" placeholder="Images à afficher sur le market" class="form-control input-md">
    </div>









</div>











<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-labelyou" for="filebutton">File Button</label>
  <div class="col-md-4">
    <input id="filebutton" name="filebutton" class="input-file" type="file">
  </div>
</div>










<!-- Multiple Checkboxes (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="checkboxes">Inline Checkboxes</label>
  <div class="col-md-4">
    <label class="checkbox-inline" for="checkboxes-0">
      <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
      1
    </label>
    <label class="checkbox-inline" for="checkboxes-1">
      <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
      2
    </label>
    <label class="checkbox-inline" for="checkboxes-2">
      <input type="checkbox" name="checkboxes" id="checkboxes-2" value="3">
      3
    </label>
    <label class="checkbox-inline" for="checkboxes-3">
      <input type="checkbox" name="checkboxes" id="checkboxes-3" value="4">
      4
    </label>
  </div>
</div>

<!-- Select Multiple -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectmultiple">Select Multiple</label>
  <div class="col-md-4">
    <select id="selectmultiple" name="selectmultiple" class="form-control" multiple="multiple">
      <option value="1">Option one</option>
      <option value="2">Option two</option>
    </select>
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">Multiple Radios</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="radios-0">
      <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
      Option one
    </label>
  </div>
  <div class="radio">
    <label for="radios-1">
      <input type="radio" name="radios" id="radios-1" value="2">
      Option two
    </label>
  </div>
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">Inline Radios</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="radios-0">
      <input type="radio" name="radios" id="radios-0" value="1" checked="checked">
      1
    </label> 
    <label class="radio-inline" for="radios-1">
      <input type="radio" name="radios" id="radios-1" value="2">
      2
    </label> 
    <label class="radio-inline" for="radios-2">
      <input type="radio" name="radios" id="radios-2" value="3">
      3
    </label> 
    <label class="radio-inline" for="radios-3">
      <input type="radio" name="radios" id="radios-3" value="4">
      4
    </label>
  </div>
</div>

<!-- Multiple Checkboxes -->
<div class="form-group">
  <label class="col-md-4 control-label" for="checkboxes">Multiple Checkboxes</label>
  <div class="col-md-4">
  <div class="checkbox">
    <label for="checkboxes-0">
      <input type="checkbox" name="checkboxes" id="checkboxes-0" value="1">
      Option one
    </label>
  </div>
  <div class="checkbox">
    <label for="checkboxes-1">
      <input type="checkbox" name="checkboxes" id="checkboxes-1" value="2">
      Option two
    </label>
  </div>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Select Basic</label>
  <div class="col-md-4">
    <select id="selectbasic" name="selectbasic" class="form-control">
      <option value="1">Option one</option>
      <option value="2">Option two</option>
    </select>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Text Area</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="textarea" name="textarea">default text</textarea>
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="button1id">Double Button</label>
  <div class="col-md-8">
    <button id="button1id" name="button1id" class="btn btn-success">Good Button</button>
    <button id="button2id" name="button2id" class="btn btn-danger">Scary Button</button>
  </div>
</div>

</fieldset>
</form>

</main>

<?php $this->stop('main_content') ?>