<div class="operationCategories form">
<?php echo $this->Form->create('OperationCategory');?>
	<fieldset>
		<legend><?php echo __('Edit Operation Category'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('OperationCategory.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('OperationCategory.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Operation Categories'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Operation Types'), array('controller' => 'operation_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Operation Type'), array('controller' => 'operation_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
