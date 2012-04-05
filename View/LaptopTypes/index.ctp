<div class="laptopTypes index">
	<h2><?php echo __('Laptop Types');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('model_name');?></th>
			<th><?php echo $this->Paginator->sort('brand_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($laptopTypes as $laptopType): ?>
	<tr>
		<td><?php echo h($laptopType['LaptopType']['id']); ?>&nbsp;</td>
		<td><?php echo h($laptopType['LaptopType']['model_name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($laptopType['Brand']['name'], array('controller' => 'brands', 'action' => 'view', $laptopType['Brand']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $laptopType['LaptopType']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $laptopType['LaptopType']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $laptopType['LaptopType']['id']), null, __('Are you sure you want to delete # %s?', $laptopType['LaptopType']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Laptop Type'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Brands'), array('controller' => 'brands', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Brand'), array('controller' => 'brands', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Laptops'), array('controller' => 'laptops', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Laptop'), array('controller' => 'laptops', 'action' => 'add')); ?> </li>
	</ul>
</div>
