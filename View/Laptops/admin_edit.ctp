<div class="laptops form">
<?php echo $this->Form->create('Laptop');?>
	<fieldset>
		<legend><?php echo __('Admin Edit Laptop'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('warranty_end_date');
		echo $this->Form->input('laptop_type_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Laptop.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Laptop.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Laptops'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Laptop Types'), array('controller' => 'laptop_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Laptop Type'), array('controller' => 'laptop_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
