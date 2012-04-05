<div class="operationCategories view">
<h2><?php  echo __('Operation Category');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($operationCategory['OperationCategory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($operationCategory['OperationCategory']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Operation Category'), array('action' => 'edit', $operationCategory['OperationCategory']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Operation Category'), array('action' => 'delete', $operationCategory['OperationCategory']['id']), null, __('Are you sure you want to delete # %s?', $operationCategory['OperationCategory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Operation Categories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Operation Category'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Operation Types'), array('controller' => 'operation_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Operation Type'), array('controller' => 'operation_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Operation Types');?></h3>
	<?php if (!empty($operationCategory['OperationType'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Operation Category Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($operationCategory['OperationType'] as $operationType): ?>
		<tr>
			<td><?php echo $operationType['id'];?></td>
			<td><?php echo $operationType['name'];?></td>
			<td><?php echo $operationType['operation_category_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'operation_types', 'action' => 'view', $operationType['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'operation_types', 'action' => 'edit', $operationType['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'operation_types', 'action' => 'delete', $operationType['id']), null, __('Are you sure you want to delete # %s?', $operationType['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Operation Type'), array('controller' => 'operation_types', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
