<div class="emails index">
	<h2><?php echo __('Emails');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('header');?></th>
			<th><?php echo $this->Paginator->sort('title');?></th>
			<th><?php echo $this->Paginator->sort('message');?></th>
			<th><?php echo $this->Paginator->sort('loan_id');?></th>
			<th><?php echo $this->Paginator->sort('intervention_id');?></th>
			<th><?php echo $this->Paginator->sort('to_person_email');?></th>
			<th><?php echo $this->Paginator->sort('to_person_id');?></th>
			<th><?php echo $this->Paginator->sort('date');?></th>
			<th><?php echo $this->Paginator->sort('from_person_email');?></th>
			<th><?php echo $this->Paginator->sort('from_person_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($emails as $email): ?>
	<tr>
		<td><?php echo h($email['Email']['id']); ?>&nbsp;</td>
		<td><?php echo h($email['Email']['header']); ?>&nbsp;</td>
		<td><?php echo h($email['Email']['title']); ?>&nbsp;</td>
		<td><?php echo h($email['Email']['message']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($email['Loan']['id'], array('controller' => 'loans', 'action' => 'view', $email['Loan']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($email['Intervention']['id'], array('controller' => 'interventions', 'action' => 'view', $email['Intervention']['id'])); ?>
		</td>
		<td><?php echo h($email['Email']['to_person_email']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($email['ToPerson']['id'], array('controller' => 'people', 'action' => 'view', $email['ToPerson']['id'])); ?>
		</td>
		<td><?php echo h($email['Email']['date']); ?>&nbsp;</td>
		<td><?php echo h($email['Email']['from_person_email']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($email['FromPerson']['id'], array('controller' => 'people', 'action' => 'view', $email['FromPerson']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $email['Email']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $email['Email']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $email['Email']['id']), null, __('Are you sure you want to delete # %s?', $email['Email']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Email'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Loans'), array('controller' => 'loans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Loan'), array('controller' => 'loans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Interventions'), array('controller' => 'interventions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Intervention'), array('controller' => 'interventions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New To Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
	</ul>
</div>
