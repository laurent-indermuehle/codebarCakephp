<div class="deviceCategories view">
<h2><?php  echo __('Device Category');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($deviceCategory['DeviceCategory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($deviceCategory['DeviceCategory']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Device Category'), array('action' => 'edit', $deviceCategory['DeviceCategory']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Device Category'), array('action' => 'delete', $deviceCategory['DeviceCategory']['id']), null, __('Are you sure you want to delete # %s?', $deviceCategory['DeviceCategory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Device Categories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Device Category'), array('action' => 'add')); ?> </li>
	</ul>
</div>
