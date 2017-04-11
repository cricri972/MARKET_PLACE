public function deleteShop($id)
	{
		$errors = [];
		$post = [];
		echo 'toto';

		var_dump($_POST);

		/*if(!empty($_POST)){
			$post = array_map('trim', array_map('strip_tags', $_POST));

			if($post['delConfirm'] != 'non' || $post['delConfirm'] != 'oui' ){
				echo 'Veuillez vérifier votre saisie !';
			}

			if($post['delConfirm'] === 'non'){

				listshop();
			}

			if($post['delConfirm'] === 'oui'){

				$deleteShopModel = new ShopModel();
				$deleteShop = $deleteShopModel -> delete($id);

				listShop();
			}

		

	}*/
}