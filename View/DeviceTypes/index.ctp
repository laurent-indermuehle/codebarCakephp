<div class="deviceTypes index">
	<h2><?php echo __('Device Types');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('device_type_id');?></th>
			<th><?php echo $this->Paginator->sort('device_category_id');?></th>
			<th><?php echo $this->Paginator->sort('brand_id');?></th>
			<th><?php echo $this->Paginator->sort('is_active');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($deviceTypes as $deviceType): ?>
	<tr>
		<td><?php echo h($deviceType['DeviceType']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($deviceType['DeviceType']['name'], array('controller' => 'device_types', 'action' => 'view', $deviceType['DeviceType']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($deviceType['DeviceCategory']['name'], array('controller' => 'device_categories', 'action' => 'view', $deviceType['DeviceCategory']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($deviceType['Brand']['name'], array('controller' => 'brands', 'action' => 'view', $deviceType['Brand']['id'])); ?>
		</td>
		<td><?php echo h($deviceType['DeviceType']['is_active']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $deviceType['DeviceType']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $deviceType['DeviceType']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $deviceType['DeviceType']['id']), null, __('Are you sure you want to delete # %s?', $deviceType['DeviceType']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Device Type'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Device Types'), array('controller' => 'device_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Device Type'), array('controller' => 'device_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Devices'), array('controller' => 'devices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Device'), array('controller' => 'devices', 'action' => 'add')); ?> </li>
	</ul>
</div>
