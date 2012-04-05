<div class="laptops index">
	<h2><?php echo __('Laptops');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('serial_number');?></th>
			<th><?php echo $this->Paginator->sort('warranty_end_date');?></th>
			<th><?php echo $this->Paginator->sort('laptop_type_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($laptops as $laptop): ?>
	<tr>
		<td><?php echo h($laptop['Laptop']['id']); ?>&nbsp;</td>
		<td><?php echo h($laptop['Laptop']['serial_number']); ?>&nbsp;</td>
		<td><?php echo h($laptop['Laptop']['warranty_end_date']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($laptop['LaptopType']['id'], array('controller' => 'laptop_types', 'action' => 'view', $laptop['LaptopType']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $laptop['Laptop']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $laptop['Laptop']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $laptop['Laptop']['id']), null, __('Are you sure you want to delete # %s?', $laptop['Laptop']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Laptop'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Laptop Types'), array('controller' => 'laptop_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Laptop Type'), array('controller' => 'laptop_types', 'action' => 'add')); ?> </li>
	</ul>
</div>
