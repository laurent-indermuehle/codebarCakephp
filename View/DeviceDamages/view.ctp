<div class="deviceDamages view">
<h2><?php  echo __('Device Damage');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($deviceDamage['DeviceDamage']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($deviceDamage['DeviceDamage']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo h($deviceDamage['DeviceDamage']['location']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Devices'); ?></dt>
		<dd>
			<?php echo $this->Html->link($deviceDamage['Devices']['id'], array('controller' => 'devices', 'action' => 'view', $deviceDamage['Devices']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Device Damage'), array('action' => 'edit', $deviceDamage['DeviceDamage']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Device Damage'), array('action' => 'delete', $deviceDamage['DeviceDamage']['id']), null, __('Are you sure you want to delete # %s?', $deviceDamage['DeviceDamage']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Device Damages'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Device Damage'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Devices'), array('controller' => 'devices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Devices'), array('controller' => 'devices', 'action' => 'add')); ?> </li>
	</ul>
</div>
