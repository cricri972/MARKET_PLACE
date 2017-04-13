<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>


</head>
<body>
	<div class="container">
		<header>
<?php
	var_dump($_SESSION);
	?>

		</header>

		<section>
			<?= $this->section('main_content') ?>
		</section>

		<footer>

		</footer>
	</div>
</body>
</html>