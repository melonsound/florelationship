<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$landingClass = "";
$headerClass = "";
if ($url == "http://floralationship/")
{
	$landingClass = "landing";
	$headerClass = "alt";
}
else
{
	$landingClass = "";
	$headerClass = "";
}


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE HTML>

<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
	</head>
    <body class="<?= $landingClass ?>">
    <?php $this->beginBody() ?>
    
<!-- Header -->
<header id="header" class="<?= $headerClass ?>">
				<h1><a href="/">Retrospect</a></h1>
				<a href="#nav">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="nav">
				<ul class="links">
					<li><a href="/">Home</a></li>
					<li><a href="/web/site/generic">Generic</a></li>
					<li><a href="/web/site/elements">Elements</a></li>
				</ul>
			</nav>



    <?= $content ?>




    <footer id="footer">
				<div class="inner">
					<ul class="icons">
						<li><a href="#" class="icon fa-facebook">
							<span class="label">Facebook</span>
						</a></li>
						<li><a href="#" class="icon fa-twitter">
							<span class="label">Twitter</span>
						</a></li>
						<li><a href="#" class="icon fa-instagram">
							<span class="label">Instagram</span>
						</a></li>
						<li><a href="#" class="icon fa-linkedin">
							<span class="label">LinkedIn</span>
						</a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Untitled.</li>
						<li>Images: <a href="http://unsplash.com">Unsplash</a>.</li>
						<li>Design: <a href="http://templated.co">TEMPLATED</a>.</li>
					</ul>
				</div>
			</footer>
    <?php $this->endBody() ?>
    </body>
	
</html>
<?php $this->endPage() ?>