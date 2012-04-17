<div class="interventions index">
	<h2><?php echo __('Interventions');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('device_id');?></th>
			<th><?php echo $this->Paginator->sort('entry_date');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th><?php echo $this->Paginator->sort('diagnostic');?></th>
			<th><?php echo $this->Paginator->sort('comment');?></th>
			<th><?php echo $this->Paginator->sort('breakdown_found');?></th>
			<th><?php echo $this->Paginator->sort('resolved_date');?></th>
			<th><?php echo $this->Paginator->sort('exit_date');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($interventions as $intervention): ?>
	<tr>
		<td><?php echo h($intervention['Intervention']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($intervention['DeviceType']['name'], array('controller' => 'devices', 'action' => 'view', $intervention['Device']['id'])); ?>
		</td>
		<td><?php echo h($intervention['Intervention']['entry_date']); ?>&nbsp;</td>
		<td><?php echo h($intervention['Intervention']['description']); ?>&nbsp;</td>
		<td><?php echo h($intervention['Intervention']['diagnostic']); ?>&nbsp;</td>
		<td><?php echo h($intervention['Intervention']['comment']); ?>&nbsp;</td>
		<td><?php echo h($intervention['Intervention']['breakdown_found']); ?>&nbsp;</td>
		<td><?php echo h($intervention['Intervention']['resolved_date']); ?>&nbsp;</td>
		<td><?php echo h($intervention['Intervention']['exit_date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $intervention['Intervention']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $intervention['Intervention']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $intervention['Intervention']['id']), null, __('Are you sure you want to delete # %s?', $intervention['Intervention']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Intervention'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Devices'), array('controller' => 'devices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Device'), array('controller' => 'devices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Documents'), array('controller' => 'documents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Document'), array('controller' => 'documents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Emails'), array('controller' => 'emails', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Email'), array('controller' => 'emails', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estimates'), array('controller' => 'estimates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estimate'), array('controller' => 'estimates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List External Intervention Numbers'), array('controller' => 'external_intervention_numbers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New External Intervention Number'), array('controller' => 'external_intervention_numbers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Operations'), array('controller' => 'operations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Operation'), array('controller' => 'operations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Technical Loans'), array('controller' => 'technical_loans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Technical Loan'), array('controller' => 'technical_loans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Problems'), array('controller' => 'problems', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Problem'), array('controller' => 'problems', 'action' => 'add')); ?> </li>
	</ul>
</div>
