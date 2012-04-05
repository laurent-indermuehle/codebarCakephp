<div class="estimates index">
	<h2><?php echo __('Estimates');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('entry_date');?></th>
			<th><?php echo $this->Paginator->sort('deadline_date');?></th>
			<th><?php echo $this->Paginator->sort('intervention_id');?></th>
			<th><?php echo $this->Paginator->sort('external_intervention_number_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($estimates as $estimate): ?>
	<tr>
		<td><?php echo h($estimate['Estimate']['id']); ?>&nbsp;</td>
		<td><?php echo h($estimate['Estimate']['entry_date']); ?>&nbsp;</td>
		<td><?php echo h($estimate['Estimate']['deadline_date']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($estimate['Intervention']['id'], array('controller' => 'interventions', 'action' => 'view', $estimate['Intervention']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($estimate['ExternalInterventionNumber']['id'], array('controller' => 'external_intervention_numbers', 'action' => 'view', $estimate['ExternalInterventionNumber']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $estimate['Estimate']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $estimate['Estimate']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $estimate['Estimate']['id']), null, __('Are you sure you want to delete # %s?', $estimate['Estimate']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Estimate'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Interventions'), array('controller' => 'interventions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Intervention'), array('controller' => 'interventions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List External Intervention Numbers'), array('controller' => 'external_intervention_numbers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New External Intervention Number'), array('controller' => 'external_intervention_numbers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estimate Items'), array('controller' => 'estimate_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estimate Item'), array('controller' => 'estimate_items', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Operations'), array('controller' => 'operations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Operation'), array('controller' => 'operations', 'action' => 'add')); ?> </li>
	</ul>
</div>
