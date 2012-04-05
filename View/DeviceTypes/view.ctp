<div class="deviceTypes view">
<h2><?php  echo __('Device Type');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($deviceType['DeviceType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Device Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($deviceType['DeviceType']['name'], array('controller' => 'device_types', 'action' => 'view', $deviceType['DeviceType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Device Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($deviceType['DeviceCategory']['name'], array('controller' => 'device_categories', 'action' => 'view', $deviceType['DeviceCategory']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Device Brand'); ?></dt>
		<dd>
			<?php echo $this->Html->link($deviceType['Brand']['name'], array('controller' => 'brands', 'action' => 'view', $deviceType['Brand']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Active'); ?></dt>
		<dd>
			<?php echo h($deviceType['DeviceType']['is_active']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Device Type'), array('action' => 'edit', $deviceType['DeviceType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Device Type'), array('action' => 'delete', $deviceType['DeviceType']['id']), null, __('Are you sure you want to delete # %s?', $deviceType['DeviceType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Device Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Device Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Device Types'), array('controller' => 'device_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Device Type'), array('controller' => 'device_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Devices'), array('controller' => 'devices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Device'), array('controller' => 'devices', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Device Types');?></h3>
	<?php if (!empty($deviceType['DeviceType'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Device Type Id'); ?></th>
		<th><?php echo __('Is Active'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($deviceType['DeviceType'] as $deviceType): ?>
		<tr>
			<td><?php echo $deviceType['name'];?></td>
			<td><?php echo $deviceType['device_brand_id'];?></td>
			<td><?php echo $deviceType['is_active'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'device_types', 'action' => 'view', $deviceType['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'device_types', 'action' => 'edit', $deviceType['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'device_types', 'action' => 'delete', $deviceType['id']), null, __('Are you sure you want to delete # %s?', $deviceType['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Device Type'), array('controller' => 'device_types', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Devices');?></h3>
	<?php if (!empty($deviceType['Device'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Date End Of Warranty'); ?></th>
		<th><?php echo __('Date First Seen'); ?></th>
		<th><?php echo __('Serial Number'); ?></th>
		<th><?php echo __('Device Type Id'); ?></th>
		<th><?php echo __('Person Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($deviceType['Device'] as $device): ?>
		<tr>
			<td><?php echo $device['id'];?></td>
			<td><?php echo $device['date_end_of_warranty'];?></td>
			<td><?php echo $device['date_first_seen'];?></td>
			<td><?php echo $device['serial_number'];?></td>
			<td><?php echo $device['device_type_id'];?></td>
			<td><?php echo $device['person_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'devices', 'action' => 'view', $device['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'devices', 'action' => 'edit', $device['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'devices', 'action' => 'delete', $device['id']), null, __('Are you sure you want to delete # %s?', $device['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Device'), array('controller' => 'devices', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
