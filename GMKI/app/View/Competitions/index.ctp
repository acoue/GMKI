<div class="competitions index">
	<div class="blocblanc">
	    <h2>Liste des compétitions enregistrées</h2>
	    <div class="blocblancContent">
			<div class="row">
	        	<div class="col-md-2"></div>
	            	<div class="col-md-8">
						<table  class="table table-hover" cellpadding="0" cellspacing="0">
							<thead>
								<tr>
									<th width="35%"><?php echo $this->Paginator->sort('name','Libellé'); ?></th>
									<th width="10%"><?php echo $this->Paginator->sort('datecompetition','Date'); ?></th>
									<th width="20%"><?php echo $this->Paginator->sort('lieux','Lieux'); ?></th>
									<th width="10%"><?php echo $this->Paginator->sort('type','Type'); ?></th>
									<th width="10%"><?php echo $this->Paginator->sort('selected','Sélectionnées'); ?></th>
									<th width="5%">Voir</th>
									<th width="5%">Modifier</th>
									<th width="5%">Supprimer</th>
								</tr>
							</thead>
							<tbody>
							<?php foreach ($competitions as $competition): ?>
								<tr>
									<td><?php echo h($competition['Competition']['name']); ?>&nbsp;</td>
									<td><?php echo date('d/m/Y',strtotime(h($competition['Competition']['datecompetition']))); ?>&nbsp;</td>
									<td><?php echo h($competition['Competition']['lieux']); ?>&nbsp;</td>
									<td><?php if(h($competition['Competition']['type']) == '1') echo "Individuel"; else echo "Equipe";  ?>&nbsp;</td>
									<td><?php if(h($competition['Competition']['selected']) == '1') echo "Oui"; else echo "Non"; ?>&nbsp;</td>
									<td><?php echo $this->Html->link(__('View'), array('action' => 'view', $competition['Competition']['id'])); ?></td>
									<td><?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $competition['Competition']['id'])); ?></td>
									<td><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $competition['Competition']['id']), array(), 'Etes vous sûr de vouloir supprimer %s?', $competition['Competition']['id']); ?></td>
								</tr>
						<?php endforeach; ?>
							</tbody>
						</table>
	             	</div>
	        	<div class="col-md-2"></div>
	     	</div>
		</div>
		<p align='center'><?php echo $this->Paginator->counter(array('format' => __('Page {:page} sur {:pages}')));?></p>
		<div class="paging">
			<p align='center'>
			<?php
				echo $this->Paginator->prev('< Prec ', array(), null, array('class' => 'prev disabled'));
				echo $this->Paginator->numbers(array('separator' => ' '));
				echo $this->Paginator->next(' Suiv. >', array(), null, array('class' => 'next disabled'));
			?>
			</p>
		</div>
		<p align="center"><?php echo $this->Html->link('Ajouter','/competitions/add',array('title'=>'Ajouter', 'class' =>'btn btn-default')); ?></p>	
	</div>
</div>
