<div class="personalLoanReasons index">
	<h2><?php echo __('Personal Loan Reasons');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('reason');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($personalLoanReasons as $personalLoanReason): ?>
	<tr>
		<td><?php echo h($personalLoanReason['PersonalLoanReason']['id']); ?>&nbsp;</td>
		<td><?php echo h($personalLoanReason['PersonalLoanReason']['reason']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $personalLoanReason['PersonalLoanReason']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $personalLoanReason['PersonalLoanReason']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $personalLoanReason['PersonalLoanReason']['id']), null, __('Are you sure you want to delete # %s?', $personalLoanReason['PersonalLoanReason']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Personal Loan Reason'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Personal Loans'), array('controller' => 'personal_loans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personal Loan'), array('controller' => 'personal_loans', 'action' => 'add')); ?> </li>
	</ul>
</div>
