<?php $this->layout('layoutshop', ['title' => 'shop']) ?>

<?php $this->start('main_content') ?>
<div class="container">
    <div class=" col-md-3" id="boutique" style="position:inherit;height:48em;">
        <div class="col-md-12">
            <div class="row ">
                <h2 >Gérer ma Boutique</h2>
            </div>
            <div class="col-md-12 " id="shop">
                <div class="row">
                   
                    <div class="list-group">
                            <a href="<?=$this->url('shop_addOrUpdateShopByShop')?>" class="list-group-item primary">
                            Modification information        
                            </a>
                             <a href="<?=$this->url('item_addItemShop')?>" class="list-group-item">
                            Ajouter article   
                            </a>
                            <a href="<?=$this->url('item_listItemByShop')?>" class="list-group-item">
                            Liste articles 
                            </a>   
                            <a href="item_listItemByShop" class="list-group-item">
                            Voir article    
                            </a>
                            
                            <a href="#" class="list-group-item">
                            Modification article    
                            </a>   
                           
                            <a href="#" class="list-group-item">
                            Supprimer article   
                            </a>
                           
                            <a href="#" class="list-group-item">
                              
                            </a>
                           
                           
                </div><!-- /list-group -->      
            </div><!-- /col -->
        </div><!-- /row -->
    </div>
</div><!-- /container -->
            




<div class="col-md-9">	
	
<div class="container" >
    <div class="row">
	    <div class="col-md-9" id="additshop">	
	
	<form class="form-horizontal" method="post" enctype="multipart/form-data">

			<!-- reference de l'article -->
			<div class="form-group">
				<label class="col-md-4 control-label" for="ref">Référence de l'article</label>
				<div class="col-md-6">
					<input type="text" id="ref" name="ref" class="form-control input-md">
				</div>
			</div>

			<!-- titre de l'article -->
			<div class="form-group">
				<label class="col-md-4 control-label" for="name">Intitulé</label>
				<div class="col-md-6">
					<input type="text" id="name" name="name" class="form-control input-md">
				</div>
			</div>

			<!-- partie photo -->
			<div class="form-group">
				<label class="col-md-4 control-label" for="picture">Photo</label>
				<div class="col-md-6">
					<input id="picture" name="picture" class="input-file" type="file">
				</div>
			</div>
			
			<!-- description de l' article -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="description">Description de l'article</label>
			  <div class="col-md-6">                     
			    <textarea class="form-control" id="description" name="description"></textarea>
			  </div>
			</div>

			<!-- prix ht -->
			<div class="form-group">
				<label class="col-md-4 control-label" for="price_ht">Prix ht</label>
				<div class="col-md-6">
					<input type="text" id="price_ht" name="price_ht" class="form-control input-md">
				</div>
			</div>

			  <!-- choix de la TVA -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="taxes">Choisir une TVA</label>
                    <div class="col-md-6">
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
				<div class="col-md-6">
					<input type="text" id="discount" name="discount" class="form-control input-md" value="<?=(isset($post['discount'])) ? $post['discount'] : 0; ?>" placeholder="remise en chiffre entier">
				</div>
			</div>

			<!-- choix de la categorie-->
			<div class="form-group">
                <label class="col-md-4 control-label" for="category">Choix de la categorie</label>
                    <div class="col-md-6">
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
				<div class="col-md-6">
					<input type="text" id="stock" name="stock" class="form-control input-md">
				</div>
			</div>


			 <!-- Button (Double) -->
                    <div class="form-group">
                        
                        <div class="col-md-8">
                            <button id="submit" name="submit" type="submit" class="btn btn-success" style="margin-left:105%;">Ajouter l'article</button>
                           
                        </div>
                    </div>

	</form>
        </div>
</div>
    </div>
    </div>
        </div>


<?php $this->stop('main_content') ?>
