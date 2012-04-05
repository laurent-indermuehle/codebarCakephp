<div class="laptopTypes view">
<h2><?php  echo __('Laptop Type');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($laptopType['LaptopType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Model Name'); ?></dt>
		<dd>
			<?php echo h($laptopType['LaptopType']['model_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Brand'); ?></dt>
		<dd>
			<?php echo $this->Html->link($laptopType['Brand']['name'], array('controller' => 'brands', 'action' => 'view', $laptopType['Brand']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Laptop Type'), array('action' => 'edit', $laptopType['LaptopType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Laptop Type'), array('action' => 'delete', $laptopType['LaptopType']['id']), null, __('Are you sure you want to delete # %s?', $laptopType['LaptopType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Laptop Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Laptop Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Brands'), array('controller' => 'brands', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Brand'), array('controller' => 'brands', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Laptops'), array('controller' => 'laptops', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Laptop'), array('controller' => 'laptops', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Laptops');?></h3>
	<?php if (!empty($laptopType['Laptop'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Serial Number'); ?></th>
		<th><?php echo __('Warranty End Date'); ?></th>
		<th><?php echo __('Laptop Type Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($laptopType['Laptop'] as $laptop): ?>
		<tr>
			<td><?php echo $laptop['id'];?></td>
			<td><?php echo $laptop['serial_number'];?></td>
			<td><?php echo $laptop['warranty_end_date'];?></td>
			<td><?php echo $laptop['laptop_type_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'laptops', 'action' => 'view', $laptop['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'laptops', 'action' => 'edit', $laptop['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'laptops', 'action' => 'delete', $laptop['id']), null, __('Are you sure you want to delete # %s?', $laptop['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Laptop'), array('controller' => 'laptops', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
