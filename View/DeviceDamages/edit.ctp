<div class="deviceDamages form">
<?php echo $this->Form->create('DeviceDamage');?>
	<fieldset>
		<legend><?php echo __('Edit Device Damage'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('description');
		echo $this->Form->input('location');
		echo $this->Form->input('devices_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DeviceDamage.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('DeviceDamage.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Device Damages'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Devices'), array('controller' => 'devices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Devices'), array('controller' => 'devices', 'action' => 'add')); ?> </li>
	</ul>
</div>
