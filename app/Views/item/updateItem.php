<?php $this->layout('layoutItems', ['title' => 'Liste des articles']) ?>

<?php $this->start('main_content') ?>
	
	<!-- <?php //echo "votre article a bien été ajouteé";?> -->


	<form class="form-horizontal" method="post" enctype="multipart/form-data">

			<!-- reference de l'article -->
			<div class="form-group">
				<label class="col-md-4 control-label" for="ref">Reference de l'article</label>
				<div class="col-md-4">
					<input type="text" id="ref" name="ref" value="<?=$view['ref'];?>" class="form-control input-md">
				</div>
			</div>

			<!-- titre de l'article -->
			<div class="form-group">
				<label class="col-md-4 control-label" for="name">Titre</label>
				<div class="col-md-4">
					<input type="text" id="name" name="name" value="<?=$view['name'];?>" class="form-control input-md">
				</div>
			</div>

			<!-- partie photo -->
			<div class="form-group">
				<label class="col-md-4 control-label" for="picture">Photo</label>
				<div class="col-md-4">
					<img src="<?= $this->assetUrl($view['picture']) ?>" alt="<?php echo $view['picture'];?>">
					<input type="hidden" name="picture" value="<?php echo $view['picture'] ?>">
					<input id="picture" name="picture"  class="input-file" type="file">
				</div>
			</div>
			
			<!-- description de l' article -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="description">Description de l'article</label>
			  <div class="col-md-4">                     
			    <textarea class="form-control" id="description" name="description"><?php echo $view['description'];?></textarea>
			  </div>
			</div>

			<!-- prix ht -->
			<div class="form-group">
				<label class="col-md-4 control-label" for="price_ht">Prix ht</label>
				<div class="col-md-4">
					<input type="text" id="price_ht" name="price_ht" value="<?=$view['price_ht'];?>" class="form-control input-md">
				</div>
			</div>

			  <!-- choix de la TVA -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="taxes">Choisir une TVA</label>
                    <div class="col-md-4">
                        <select id="taxes" name="taxes" class="form-control">
                        	<option value="<?=$view['taxes'];?>"><?=$view['taxes'];?></option>
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
					<input type="text" id="discount" name="discount" value="<?=$view['discount'];?>" class="form-control input-md" placeholder="de 0 a 90">
				</div>
			</div>

			<!-- choix de la categorie-->
			<div class="form-group">
                <label class="col-md-4 control-label" for="category">Choix de la categorie</label>
                    <div class="col-md-4">
                        <select id="category" name="category" class="form-control">
                        	<option value="<?=$view['category'];?>"><?=$view['category'];?></option>
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
					<input type="text" id="stock" name="stock" value="<?=$view['stock'];?>" class="form-control input-md">
				</div>
			</div>


			 <!-- Button (Double) -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="submit">Double Button</label>
                        <div class="col-md-8">
                            <button id="submit" name="submit" type="submit" class="btn btn-success">Modifier l'article</button>
                            <button id="button2id" name="button2id" class="btn btn-info"><a href="<?php echo $this->url('item_listItem')?>">Lister les  articles</a></button>
                        </div>
                    </div>

	</form>

<?php $this->stop('main_content') ?>