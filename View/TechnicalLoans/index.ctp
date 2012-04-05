<div class="technicalLoans index">
	<h2><?php echo __('Technical Loans');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('intervention_id');?></th>
			<th><?php echo $this->Paginator->sort('loan_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($technicalLoans as $technicalLoan): ?>
	<tr>
		<td><?php echo h($technicalLoan['TechnicalLoan']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($technicalLoan['Intervention']['id'], array('controller' => 'interventions', 'action' => 'view', $technicalLoan['Intervention']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($technicalLoan['Loan']['id'], array('controller' => 'loans', 'action' => 'view', $technicalLoan['Loan']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $technicalLoan['TechnicalLoan']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $technicalLoan['TechnicalLoan']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $technicalLoan['TechnicalLoan']['id']), null, __('Are you sure you want to delete # %s?', $technicalLoan['TechnicalLoan']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Technical Loan'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Interventions'), array('controller' => 'interventions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Intervention'), array('controller' => 'interventions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Loans'), array('controller' => 'loans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Loan'), array('controller' => 'loans', 'action' => 'add')); ?> </li>
	</ul>
</div>
