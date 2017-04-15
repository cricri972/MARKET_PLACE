<?php//AddArticle.php ?>
<?php $this->layout('layoutshop', ['title' => 'Ajouter un article']) ?>

<?php $this->start('main_content') ?>
	
	
	<div class=container>
<div class="row">

       
        <div class="col-md-3" id="admincontrol" style="position:absolute";>  
                  <div class="col-md-3"> 
                    <h2>Administration</h2>
                </div><!-- /row -->
                <div class="row">
                    <div class="col-md-3 col-sm-12" id="shop">
                        <div class="list-group client">
                            <a href="<?=$this->url('Clients_addClient')?>" class="list-group-item">
                            Clients : ajouter  
                            </a>
                            <a href="<?=$this->url('Clients_modifyClient')?>" class="list-group-item">
                            Clients : modifier   
                            </a>
                            <a href="<?=$this->url('Clients_listClient')?>" class="list-group-item primary">
                            Clients : liste       
                            </a>
                            <a href="<?=$this->url('Clients_deleteClient')?>" class="list-group-item">
                            Clients : supprimer
                            </a>
                            </div>
                        <div class="list-group shop">
                            <a href="<?=$this->url('shop_addShop')?>" class="list-group-item">
                            Boutiques : ajouter
                            </a>
                            <a href="<?=$this->url('shop_addOrUpdateShop')?>" class="list-group-item">
                            Boutiques : modifier
                                
                            </a>
                            <a href="<?=$this->url('shop_listShop')?>" class="list-group-item">
                            Boutiques : liste  
                            </a>
                            <a href="<?=$this->url('shop_deleteShop')?>" class="list-group-item">
                            Boutiques : supprimer 
                            </a>
                            </div>
                        <div class="list-group user">
                            <a href="<?=$this->url('Users_addUser')?>" class="list-group-item">
                            Users : ajouter     
                            </a>
                            <a href="<?=$this->url('Users_modifyUser')?>" class="list-group-item">
                            Users : modifier  
                            </a> 
                            <a href="<?=$this->url('Users_listUser')?>" class="list-group-item">
                            Users : liste   
                            </a>
                             <a href="<?=$this->url('Users_deleteUser')?>" class="list-group-item">
                            Users : supprimer  
                            </a>
                             <a href="#" class="list-group-item">
                                
                            </a>
                             <a href="#" class="list-group-item">                               
                            </a>
                        </div><!-- /list-group -->      
                    </div><!-- /col -->
            </div>
        </div><!-- /row -->

<div class="col-md-9">	
	
<div class="container " >
    <div class="row">
	    <div class="col-md-9">	
	
	<form class="form-horizontal" method="post" enctype="multipart/form-data">

			<!-- reference de l'article -->
			<div class="form-group">
				<label class="col-md-4 control-label" for="ref">Référence de l'article</label>
				<div class="col-md-4">
					<input type="text" id="ref" name="ref" class="form-control input-md">
				</div>
			</div>

			<!-- titre de l'article -->
			<div class="form-group">
				<label class="col-md-4 control-label" for="name">Intitulé</label>
				<div class="col-md-4">
					<input type="text" id="name" name="name" class="form-control input-md">
				</div>
			</div>

			<!-- partie photo -->
			<div class="form-group">
				<label class="col-md-4 control-label" for="picture">Photo</label>
				<div class="col-md-4">
					<input id="picture" name="picture" class="input-file" type="file">
				</div>
			</div>
			
			<!-- description de l' article -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="description">Description de l'article</label>
			  <div class="col-md-4">                     
			    <textarea class="form-control" id="description" name="description"></textarea>
			  </div>
			</div>

			<!-- prix ht -->
			<div class="form-group">
				<label class="col-md-4 control-label" for="price_ht">Prix ht</label>
				<div class="col-md-4">
					<input type="text" id="price_ht" name="price_ht" class="form-control input-md">
				</div>
			</div>

			  <!-- choix de la TVA -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="taxes">Choisir une TVA</label>
                    <div class="col-md-4">
                        <select id="taxes" name="taxes" class="form-control">
                        	<option value="">choisir une TVA</option>
                            <option value="2.1">tva 2.1 %</option>
                            <option value="8.5">tva 8.5 %</option>
                            <option value="18.6">tva 18.6 %</option>
                            <option value="5.5">tva 5.5 %</option>
                        </select>
                    </div>
            </div>

            <!-- discount-->
			<div class="form-group">
				<label class="col-md-4 control-label" for="discount">Remise</label>
				<div class="col-md-4">
					<input type="text" id="discount" name="discount" class="form-control input-md" value="<?=(isset($post['discount'])) ? $post['discount'] : 0; ?>" placeholder="remise en chiffre entier">
				</div>
			</div>

			<!-- choix de la categorie-->
			<div class="form-group">
                <label class="col-md-4 control-label" for="category">Choix de la categorie</label>
                    <div class="col-md-4">
                        <select id="category" name="category" class="form-control">
                        	<option value="">choisir une categorie</option>
                            <option value="sport">sport</option>
                            <option value="hi-tech">hi-tech</option>
                            <option value="deco cadeaux">deco cadeaux</option>
                            <option value="bricolage">bricolage</option>
                            <option value="electromenager">electromenager</option>
                        </select>
                    </div>
            </div>

            <!-- Nombre d'article en stock-->
			<div class="form-group">
				<label class="col-md-4 control-label" for="stock">Stock d'article</label>
				<div class="col-md-4">
					<input type="text" id="stock" name="stock" class="form-control input-md">
				</div>
			</div>


			 <!-- Button (Double) -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="submit">Votre choix d'action</label>
                        <div class="col-md-8">
                            <button id="submit" name="submit" type="submit" class="btn btn-success">Ajouter l'article</button>
                            <button id="button2id" name="button2id" class="btn btn-info"><a href="<?php echo $this->url('item_listItem')?>">Lister les  articles</a></button>
                        </div>
                    </div>

	</form>
        </div>
</div>
    </div>
    </div>
        </div>
</div>

<?php $this->stop('main_content') ?>
