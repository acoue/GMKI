<div class="competitions form">
	<div class="blocblanc">
     	<h2>Edition d'une compétition</h2>
        <div class="blocblancContent">
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
<?php echo $this->Form->create('Competition'); 
		echo $this->Form->hidden('id');?>
                	<table class="table table-hover">
                    	<tr>
                        	<td width="40%"><label for="name">Libellé </label></td>
                        	<td><?= $this->Form->input('name',array('label' => false,'div' => false,'class'=>'form-control','placeholder'=>'Libellé de la compétition', 'size'=>'100px', 'required' =>'required','autofocus'=>'autofocus'));?></td>
                        </tr>
                    	<tr>
                        	<td><label for="datecompetition">Date </label></td>
                        	<td><?= $this->Form->input('datecompetition',array('type' => 'text','label' => false,'div' => false,'class'=>'form-control','placeholder'=>'Date de la compétition', 'size'=>'50px', 'required' =>'required'));?></td>
                        </tr>
                    	<tr>
                        	<td><label for="lieux">Lieux </label></td>
                        	<td><?= $this->Form->input('lieux',array('label' => false,'div' => false,'class'=>'form-control','placeholder'=>'Lieux de la compétition', 'size'=>'50px'));?></td>
                        </tr>
                    	<tr>
                        	<td><label for="type">Type </label></td>
                        	<td><?= $this->Form->input('type', array('label' => false,'div' => false,'class'=>'dropdown-toggle btn btn-default','options' => array(0 => 'Individuel', 1 => 'Equipe')));?></td>
                        </tr>
                    	<tr>
                        	<td><label for="description">Description </label></td>
                        	<td><?= $this->Form->input('description',array('label' => false,'div' => false,'placeholder'=>'Description de la compétition'));?></td>
                        </tr>
                    	<tr>
                        	<td><label for="selected">Selectionnée </label></td>
                        	<td><?= $this->Form->input('selected',array('label' => false,'div' => false,'class'=>'dropdown-toggle btn btn-default','options' => array(0 => 'Non', 1 => 'Oui')));?></td>
                        </tr>
                        <tr>
                        	<td colspan="2" align="center">
                        	<?= $this->Form->button('Valider', array('class' => 'btn btn-default')); ?></td>
                        </tr>
                        <tr>
                        	<td colspan="2" align="center">
                        	<?= $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Competition.id')), array('class' =>'btn btn-warning'), __('Etes-vous sûr de vouloir supprimer %s?', $this->Form->value('Competition.id'))); ?>
                        	</td>
                        </tr>
              		</table>
<?= $this->Form->end();?>
					<p align="center"><?= $this->Html->link('Retour','/competitions/index',array('title'=>'Retour', 'class' =>'btn btn-info', 'target' => '_self')); ?></p>
		            </div>
       			<div class="col-md-2"></div>
        	</div>
		</div>
	</div>
</div>
