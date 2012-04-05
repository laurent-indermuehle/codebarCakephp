<div class="operationTypes form">
<?php echo $this->Form->create('OperationType');?>
	<fieldset>
		<legend><?php echo __('Edit Operation Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('operation_category_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('OperationType.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('OperationType.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Operation Types'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Operation Categories'), array('controller' => 'operation_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Operation Category'), array('controller' => 'operation_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Operations'), array('controller' => 'operations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Operation'), array('controller' => 'operations', 'action' => 'add')); ?> </li>
	</ul>
</div>
