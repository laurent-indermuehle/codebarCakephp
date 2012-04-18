<div class="loans index">
	<h2><?php echo __('Loans');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('person_customer_id');?></th>
			<th><?php echo $this->Paginator->sort('person_technician_id');?></th>
			<th><?php echo $this->Paginator->sort('borrow_date');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($loans as $loan): ?>
	<tr>
		<td><?php echo h($loan['Loan']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($loan['PersonCustomer']['id'], array('controller' => 'people', 'action' => 'view', $loan['PersonCustomer']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($loan['PersonTechnician']['id'], array('controller' => 'people', 'action' => 'view', $loan['PersonTechnician']['id'])); ?>
		</td>
		<td><?php echo h($loan['Loan']['borrow_date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $loan['Loan']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $loan['Loan']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $loan['Loan']['id']), null, __('Are you sure you want to delete # %s?', $loan['Loan']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Loan'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person Customer'), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Emails'), array('controller' => 'emails', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Email'), array('controller' => 'emails', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Loan Articles'), array('controller' => 'loan_articles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Loan Article'), array('controller' => 'loan_articles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personal Loans'), array('controller' => 'personal_loans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personal Loan'), array('controller' => 'personal_loans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Technical Loans'), array('controller' => 'technical_loans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Technical Loan'), array('controller' => 'technical_loans', 'action' => 'add')); ?> </li>
	</ul>
</div>
