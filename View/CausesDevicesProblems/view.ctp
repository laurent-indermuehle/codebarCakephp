<div class="causesDevicesProblems view">
<h2><?php  echo __('Causes Devices Problem');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($causesDevicesProblem['CausesDevicesProblem']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Problem'); ?></dt>
		<dd>
			<?php echo $this->Html->link($causesDevicesProblem['Problem']['id'], array('controller' => 'problems', 'action' => 'view', $causesDevicesProblem['Problem']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Device'); ?></dt>
		<dd>
			<?php echo $this->Html->link($causesDevicesProblem['Device']['id'], array('controller' => 'devices', 'action' => 'view', $causesDevicesProblem['Device']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cause'); ?></dt>
		<dd>
			<?php echo $this->Html->link($causesDevicesProblem['Cause']['id'], array('controller' => 'causes', 'action' => 'view', $causesDevicesProblem['Cause']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Causes Devices Problem'), array('action' => 'edit', $causesDevicesProblem['CausesDevicesProblem']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Causes Devices Problem'), array('action' => 'delete', $causesDevicesProblem['CausesDevicesProblem']['id']), null, __('Are you sure you want to delete # %s?', $causesDevicesProblem['CausesDevicesProblem']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Causes Devices Problems'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Causes Devices Problem'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Problems'), array('controller' => 'problems', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Problem'), array('controller' => 'problems', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Devices'), array('controller' => 'devices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Device'), array('controller' => 'devices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Causes'), array('controller' => 'causes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cause'), array('controller' => 'causes', 'action' => 'add')); ?> </li>
	</ul>
</div>
