<div class="laptops form">
<?php echo $this->Form->create('Laptop');?>
	<fieldset>
		<legend><?php echo __('Add Laptop'); ?></legend>
	<?php
		echo $this->Form->input('serial_number');
		echo $this->Form->input('warranty_end_date');
		echo $this->Form->input('laptop_type_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Laptops'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Laptop Types'), array('controller' => 'laptop_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Laptop Type'), array('controller' => 'laptop_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
