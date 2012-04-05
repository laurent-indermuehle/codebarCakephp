<div class="operationTypes view">
<h2><?php  echo __('Operation Type');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($operationType['OperationType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($operationType['OperationType']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Operation Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($operationType['OperationCategory']['name'], array('controller' => 'operation_categories', 'action' => 'view', $operationType['OperationCategory']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Operation Type'), array('action' => 'edit', $operationType['OperationType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Operation Type'), array('action' => 'delete', $operationType['OperationType']['id']), null, __('Are you sure you want to delete # %s?', $operationType['OperationType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Operation Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Operation Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Operation Categories'), array('controller' => 'operation_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Operation Category'), array('controller' => 'operation_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Operations'), array('controller' => 'operations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Operation'), array('controller' => 'operations', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Operations');?></h3>
	<?php if (!empty($operationType['Operation'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Intervention Id'); ?></th>
		<th><?php echo __('Operation Type Id'); ?></th>
		<th><?php echo __('Person Technician Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th><?php echo __('Estimate Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($operationType['Operation'] as $operation): ?>
		<tr>
			<td><?php echo $operation['id'];?></td>
			<td><?php echo $operation['intervention_id'];?></td>
			<td><?php echo $operation['operation_type_id'];?></td>
			<td><?php echo $operation['person_technician_id'];?></td>
			<td><?php echo $operation['date'];?></td>
			<td><?php echo $operation['location_id'];?></td>
			<td><?php echo $operation['estimate_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'operations', 'action' => 'view', $operation['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'operations', 'action' => 'edit', $operation['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'operations', 'action' => 'delete', $operation['id']), null, __('Are you sure you want to delete # %s?', $operation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Operation'), array('controller' => 'operations', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
