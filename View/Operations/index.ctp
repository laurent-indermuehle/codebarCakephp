<div class="operations index">
	<h2><?php echo __('Operations');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('intervention_id');?></th>
			<th><?php echo $this->Paginator->sort('operation_type_id');?></th>
			<th><?php echo $this->Paginator->sort('person_technician_id');?></th>
			<th><?php echo $this->Paginator->sort('date');?></th>
			<th><?php echo $this->Paginator->sort('location_id');?></th>
			<th><?php echo $this->Paginator->sort('estimate_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($operations as $operation): ?>
	<tr>
		<td><?php echo h($operation['Operation']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($operation['Intervention']['id'], array('controller' => 'interventions', 'action' => 'view', $operation['Intervention']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($operation['OperationType']['name'], array('controller' => 'operation_types', 'action' => 'view', $operation['OperationType']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($operation['PersonTechnician']['id'], array('controller' => 'people', 'action' => 'view', $operation['PersonTechnician']['id'])); ?>
		</td>
		<td><?php echo h($operation['Operation']['date']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($operation['Location']['name'], array('controller' => 'locations', 'action' => 'view', $operation['Location']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($operation['Estimate']['id'], array('controller' => 'estimates', 'action' => 'view', $operation['Estimate']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $operation['Operation']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $operation['Operation']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $operation['Operation']['id']), null, __('Are you sure you want to delete # %s?', $operation['Operation']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Operation'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Interventions'), array('controller' => 'interventions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Intervention'), array('controller' => 'interventions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Operation Types'), array('controller' => 'operation_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Operation Type'), array('controller' => 'operation_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person Technician'), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estimates'), array('controller' => 'estimates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estimate'), array('controller' => 'estimates', 'action' => 'add')); ?> </li>
	</ul>
</div>
