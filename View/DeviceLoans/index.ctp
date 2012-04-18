<div class="deviceLoans index">
	<h2><?php echo __('Device Loans');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('device_id');?></th>
			<th><?php echo $this->Paginator->sort('loan_id');?></th>
			<th><?php echo $this->Paginator->sort('person_technician_return_id');?></th>
			<th><?php echo $this->Paginator->sort('actual_return_date');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($deviceLoans as $deviceLoan): ?>
	<tr>
		<td><?php echo h($deviceLoan['DeviceLoan']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($deviceLoan['Device']['id'], array('controller' => 'devices', 'action' => 'view', $deviceLoan['Device']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($deviceLoan['Loan']['id'], array('controller' => 'loans', 'action' => 'view', $deviceLoan['Loan']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($deviceLoan['PersonTechncianReturn']['full_name_with_sciper'], array('controller' => 'people', 'action' => 'view', $deviceLoan['PersonTechncianReturn']['id'])); ?>
		</td>
		<td><?php echo h($deviceLoan['DeviceLoan']['actual_return_date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $deviceLoan['DeviceLoan']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $deviceLoan['DeviceLoan']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $deviceLoan['DeviceLoan']['id']), null, __('Are you sure you want to delete # %s?', $deviceLoan['DeviceLoan']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Device Loan'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Devices'), array('controller' => 'devices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Device'), array('controller' => 'devices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Loans'), array('controller' => 'loans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Loan'), array('controller' => 'loans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person Techncian Return'), array('controller' => 'people', 'action' => 'add')); ?> </li>
	</ul>
</div>
