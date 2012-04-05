<div class="causesDevicesProblems form">
<?php echo $this->Form->create('CausesDevicesProblem');?>
	<fieldset>
		<legend><?php echo __('Edit Causes Devices Problem'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('problem_id');
		echo $this->Form->input('device_id');
		echo $this->Form->input('cause_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CausesDevicesProblem.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CausesDevicesProblem.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Causes Devices Problems'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Problems'), array('controller' => 'problems', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Problem'), array('controller' => 'problems', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Devices'), array('controller' => 'devices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Device'), array('controller' => 'devices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Causes'), array('controller' => 'causes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cause'), array('controller' => 'causes', 'action' => 'add')); ?> </li>
	</ul>
</div>
