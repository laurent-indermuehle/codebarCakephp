<div class="operationTypes index">
	<h2><?php echo __('Operation Types');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('operation_category_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($operationTypes as $operationType): ?>
	<tr>
		<td><?php echo h($operationType['OperationType']['id']); ?>&nbsp;</td>
		<td><?php echo h($operationType['OperationType']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($operationType['OperationCategory']['name'], array('controller' => 'operation_categories', 'action' => 'view', $operationType['OperationCategory']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $operationType['OperationType']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $operationType['OperationType']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $operationType['OperationType']['id']), null, __('Are you sure you want to delete # %s?', $operationType['OperationType']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Operation Type'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Operation Categories'), array('controller' => 'operation_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Operation Category'), array('controller' => 'operation_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Operations'), array('controller' => 'operations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Operation'), array('controller' => 'operations', 'action' => 'add')); ?> </li>
	</ul>
</div>
