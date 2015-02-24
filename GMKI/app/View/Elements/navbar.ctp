<!-- navbar -->
	<nav class="navbar navbar-default navbar-static-top" role="navigation">
    	<div class="container">
        	<div class="navbar-header">
            	<button class="navbar-toggle collapsed" aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" type="button">
                	<span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
         	    </button>
	  			<div class="row">
		    		<div class="col-md-2"><span class="header_logo"><?= $this->Html->image("header.png",array('height' =>'70px'))?></span></div>
		    		<div class="col-md-3"><span class="header_titre">Gestion Manifestation</span></div>
		    		<div class="col-md-5">
		    			<div id="navbar" class="navbar-collapse collapse">
			           		<ul class="nav navbar-nav navbar-right">
			                	<li class="dropdown">
			                    	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Gestion<span class="caret"></span></a>
			                        <ul class="dropdown-menu" role="menu">
			                        	<li><?php echo $this->Html->link('Compétition','/competitions/index',array('title'=>'Gestion des compétitions')); ?></a></li>
			                            <li><a href="#">Cat&eacute;gories</a></li>
			                            <li><a href="#">R&eacute;gions</a></li>
			                            <li><a href="#">Clubs</a></li>
			                            <li><a href="#">Licenci&eacute;s</a></li>
			                            <li class="divider"></li>
			                            <li><a href="#">Import via fichier</a></li>
			                      	</ul>
			                	</li>
			                    <li class="dropdown">
			                    	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Compétition<span class="caret"></span></a>
			                        <ul class="dropdown-menu" role="menu">
			                        	<li><a href='#'>R&eacute;partition</a></li>
			                            <li><a href='#'>Tirage au sort</a></li>
			                            <li><a href='#'>Tirage au sort EQUIPES France</a></li>
			                            <li><a href='#'>G&eacute;n&eacute;ration poules</a></li>
			                            <li><a href='#'>Imprimer poules</a></li>
			                            <li><a href='#'>G&eacute;n&eacute;ration tableaux</a></li>
			                            <li><a href='#'><span>R&eacute;sultats - Classement poules</a></li>
			                            <li><a href='#'><span>R&eacute;sultat - Combats poules</a></li>
			                            <li><a href='#'><span>R&eacute;sultat - Combats tableaux</a></li>
			                        </ul>
			                    </li>
			                        <li class="dropdown">
			                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Passages de grades<span class="caret"></span></a>
			                            <ul class="dropdown-menu" role="menu">
			                                <li><a href="#">Liste</a></li>
			                                <li><a href="#">R&eacute;sultats</a></li>
			                            </ul>
			                        </li>
			                    <li><a href="#">A propos</a></li>
			                </ul>
            			</div>
		    		</div>
		    		<div class="col-md-2"><br><?= $this->Html->link('Créer compte','#',array('title'=>'Retour', 'class' =>'btn btn-info', 'target' => '_self')); ?></div>
		    	</div>
	    	</div>
		</div>
	</nav> 
      <!-- /.navbar -->