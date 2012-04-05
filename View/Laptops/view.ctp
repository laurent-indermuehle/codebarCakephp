<div class="laptops view">
<h2><?php  echo __('Laptop');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($laptop['Laptop']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Serial Number'); ?></dt>
		<dd>
			<?php echo h($laptop['Laptop']['serial_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Warranty End Date'); ?></dt>
		<dd>
			<?php echo h($laptop['Laptop']['warranty_end_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Laptop Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($laptop['LaptopType']['id'], array('controller' => 'laptop_types', 'action' => 'view', $laptop['LaptopType']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Laptop'), array('action' => 'edit', $laptop['Laptop']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Laptop'), array('action' => 'delete', $laptop['Laptop']['id']), null, __('Are you sure you want to delete # %s?', $laptop['Laptop']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Laptops'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Laptop'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Laptop Types'), array('controller' => 'laptop_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Laptop Type'), array('controller' => 'laptop_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
