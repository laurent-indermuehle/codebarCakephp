<div class="operationCategories form">
<?php echo $this->Form->create('OperationCategory');?>
	<fieldset>
		<legend><?php echo __('Add Operation Category'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Operation Categories'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Operation Types'), array('controller' => 'operation_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Operation Type'), array('controller' => 'operation_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
