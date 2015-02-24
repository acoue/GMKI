<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Application de gestion d'une manifestation de kendo ou de iaido">
        <meta name="author" content="Anthony COUE">
	<title>
	<?php if(isset($title_for_layout)) echo "GMKI"; else echo "GMKI - ".$title_for_layout; ?>
	</title>
	<?php
		echo $this->fetch('meta');
		echo $this->Html->meta('icon');
    	echo $this->Html->css(array('style','bootstrap','jquery-ui'));
		echo $this->fetch('css');
	?>
</head>
<body>
	<div id="main">
		<?php echo $this->element('navbar'); ?>
		<!-- Container -->
	    <div class="container">  
			<div class='row'>
				<div class="alert alert-info titre_competition"><strong>Manifestation s&eacute;lectionn&eacute;e : <?php if(!empty($_SESSION['competitionSelected'])) echo $_SESSION['competitionSelected']; else echo "Aucune"?></strong></div>
	        </div>
			<?php echo $this->Session->flash(); ?>
			<div class="row">
	        <?php echo $this->fetch('content'); ?>
	        </div>
		</div>
	    <!-- /.container -->
	    <!-- Footer -->
	    <footer class="footer">
			<div class="container">
	        	<div class="row">
	            	<div class="col-md-11 text-footer-left"><?= $this->Html->image("by-nc-nd.eu.png")?>
	                GMKI de Anthony COUE est mis à disposition selon les termes de la licence Creative Commons Attribution - Pas d'utilisation Commerciale - Pas de Modification 4.0 International.
	                </div>
	                <div class="col-md-1 text-footer-right">Version 3.0<br />15/02/2015</div>
				</div>
			</div>
		</footer>
		<!-- /.footer -->
	</div>
	<?php 
		echo $this->Html->script(array('jquery','bootstrap','script','jquery-ui'));
    	echo $this->fetch('script'); 
		echo $this->element('sql_dump'); 
	?>
</body>
</html>
