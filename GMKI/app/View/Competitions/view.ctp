<div class="competitions view">
	<div class="blocblanc">
     	<h2>Visualisation d'une compétition</h2>
        <div class="blocblancContent">
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
                	<table class="table table-hover">
                    	<tr>
                        	<td width="40%"><label>Identifiant </label></td>
                        	<td><?= h($competition['Competition']['id'])?></td>
                        </tr>
                    	<tr>
                        	<td width="40%"><label>Libellé </label></td>
                        	<td><?= h($competition['Competition']['name']);?></td>
                        </tr>
                    	<tr>
                        	<td><label>Date </label></td>
                        	<td><?= date('d/m/Y',strtotime(h($competition['Competition']['datecompetition']))); ?></td>
                        </tr>
                    	<tr>
                        	<td><label>Lieux </label></td>	
                        	<td><?= h($competition['Competition']['lieux']);?></td>
                        </tr>
                    	<tr>
                        	<td><label>Type </label></td>
                        	<td><?php if(h($competition['Competition']['type']) == '1') echo "Individuel"; else echo "Equipe";?></td>
                        </tr>
                    	<tr>
                        	<td><labe>Description </label></td>
                        	<td><?= h($competition['Competition']['description']);?></td>
                        </tr>
                    	<tr>
                        	<td><label>Selectionnée </label></td>
                        	<td><?php if(h($competition['Competition']['selected']) == '1') echo "Oui"; else echo "Non";?></td>
                        </tr>
                    	<tr>
                        	<td><label>Créée le </label></td>
                        	<td><?= h($competition['Competition']['created']);?></td>
                        </tr>
                    	<tr>
                        	<td><label>Modifiée le</label></td>
                        	<td><?= h($competition['Competition']['modified']);?></td>
                        </tr>
                        <tr>
                        	<td colspan="2" align="center">
                        	<?= $this->Html->link('Editer', '/competitions/edit/'.$competition['Competition']['id'], array('class' => 'btn btn-default')); ?></td>
                        </tr>
                        <tr>
                        	<td colspan="2" align="center">
                        	<?= $this->Html->link('Ajouter','/competitions/add',array('title'=>'Ajouter', 'class' =>'btn btn-default')); ?></td>
                        </tr>
                        <tr>
                        	<td colspan="2" align="center">
                        	<?= $this->Form->postLink(__('Delete'), array('action' => 'delete', $competition['Competition']['id']), array('class' =>'btn btn-warning'), __('Etes-vous sûr de vouloir supprimer %s?', $competition['Competition']['id'])); ?>
                        	</td>
                        </tr>
              		</table>
					<p align="center"><?= $this->Html->link('Retour','/competitions/index',array('title'=>'Retour', 'class' =>'btn btn-info', 'target' => '_self')); ?></p>
		            </div>
       			<div class="col-md-2"></div>
        	</div>
		</div>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Competition'), array('action' => 'edit', $competition['Competition']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Competition'), array('action' => 'delete', $competition['Competition']['id']), array(), __('Are you sure you want to delete # %s?', $competition['Competition']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Competitions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Competition'), array('action' => 'add')); ?> </li>
	</ul>
</div>