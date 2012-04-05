<div class="externalInterventionNumbers index">
	<h2><?php echo __('External Intervention Numbers');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('intervention_id');?></th>
			<th><?php echo $this->Paginator->sort('partner_id');?></th>
			<th><?php echo $this->Paginator->sort('external_intervention_number_type_id');?></th>
			<th><?php echo $this->Paginator->sort('number');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($externalInterventionNumbers as $externalInterventionNumber): ?>
	<tr>
		<td><?php echo h($externalInterventionNumber['ExternalInterventionNumber']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($externalInterventionNumber['Intervention']['id'], array('controller' => 'interventions', 'action' => 'view', $externalInterventionNumber['Intervention']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($externalInterventionNumber['Partner']['name'], array('controller' => 'partners', 'action' => 'view', $externalInterventionNumber['Partner']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($externalInterventionNumber['ExternalInterventionNumberType']['name'], array('controller' => 'external_intervention_number_types', 'action' => 'view', $externalInterventionNumber['ExternalInterventionNumberType']['id'])); ?>
		</td>
		<td><?php echo h($externalInterventionNumber['ExternalInterventionNumber']['number']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $externalInterventionNumber['ExternalInterventionNumber']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $externalInterventionNumber['ExternalInterventionNumber']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $externalInterventionNumber['ExternalInterventionNumber']['id']), null, __('Are you sure you want to delete # %s?', $externalInterventionNumber['ExternalInterventionNumber']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New External Intervention Number'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Interventions'), array('controller' => 'interventions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Intervention'), array('controller' => 'interventions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Partners'), array('controller' => 'partners', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partner'), array('controller' => 'partners', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List External Intervention Number Types'), array('controller' => 'external_intervention_number_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New External Intervention Number Type'), array('controller' => 'external_intervention_number_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estimates'), array('controller' => 'estimates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estimate'), array('controller' => 'estimates', 'action' => 'add')); ?> </li>
	</ul>
</div>
