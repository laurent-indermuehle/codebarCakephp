<div class="causesDevicesProblems index">
	<h2><?php echo __('Causes Devices Problems');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('problem_id');?></th>
			<th><?php echo $this->Paginator->sort('device_id');?></th>
			<th><?php echo $this->Paginator->sort('cause_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($causesDevicesProblems as $causesDevicesProblem): ?>
	<tr>
		<td><?php echo h($causesDevicesProblem['CausesDevicesProblem']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($causesDevicesProblem['Problem']['id'], array('controller' => 'problems', 'action' => 'view', $causesDevicesProblem['Problem']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($causesDevicesProblem['Device']['id'], array('controller' => 'devices', 'action' => 'view', $causesDevicesProblem['Device']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($causesDevicesProblem['Cause']['id'], array('controller' => 'causes', 'action' => 'view', $causesDevicesProblem['Cause']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $causesDevicesProblem['CausesDevicesProblem']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $causesDevicesProblem['CausesDevicesProblem']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $causesDevicesProblem['CausesDevicesProblem']['id']), null, __('Are you sure you want to delete # %s?', $causesDevicesProblem['CausesDevicesProblem']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Causes Devices Problem'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Problems'), array('controller' => 'problems', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Problem'), array('controller' => 'problems', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Devices'), array('controller' => 'devices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Device'), array('controller' => 'devices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Causes'), array('controller' => 'causes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cause'), array('controller' => 'causes', 'action' => 'add')); ?> </li>
	</ul>
</div>
