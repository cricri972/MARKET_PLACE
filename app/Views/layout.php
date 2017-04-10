<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>

	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">

	<!-- ################	Bootstrap CSS 	###################-->
    <link rel="stylesheet" href="<?= $this->assetUrl('bootstrap/bootstrap.min.css') ?>" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


</head>
<body>
	<div class="container">
		<header>
		<h1>Madinina Market</h1>
		<a href='../listShop/''>Les Boutiques</a>	

		</header>

		<section>
			<?= $this->section('main_content') ?>
		</section>

		<footer>
		</footer>
	</div>
</body>
</html>