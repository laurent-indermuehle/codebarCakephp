<div class="devices view">
<h2><?php  echo __('Device');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($device['Device']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date End Of Warranty'); ?></dt>
		<dd>
			<?php echo h($device['Device']['date_end_of_warranty']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date First Seen'); ?></dt>
		<dd>
			<?php echo h($device['Device']['date_first_seen']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Serial Number'); ?></dt>
		<dd>
			<?php echo h($device['Device']['serial_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Brand'); ?></dt>
		<dd>
			<?php echo h($brand['Brand']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Device Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($device['DeviceType']['name'], array('controller' => 'device_types', 'action' => 'view', $device['DeviceType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Person'); ?></dt>
		<dd>
			<?php echo $this->Html->link($device['Person']['first_name'].' '.$device['Person']['last_name'], array('controller' => 'people', 'action' => 'view', $device['Person']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Device'), array('action' => 'edit', $device['Device']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Device'), array('action' => 'delete', $device['Device']['id']), null, __('Are you sure you want to delete # %s?', $device['Device']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Devices'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Device'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Device Types'), array('controller' => 'device_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Device Type'), array('controller' => 'device_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Interventions'), array('controller' => 'interventions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Intervention'), array('controller' => 'interventions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Problems'), array('controller' => 'problems', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Problem'), array('controller' => 'problems', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Causes'), array('controller' => 'causes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cause'), array('controller' => 'causes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Interventions');?></h3>
	<?php if (!empty($device['Intervention'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Device Id'); ?></th>
		<th><?php echo __('Entry Date'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Diagnostic'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th><?php echo __('Breakdown Found'); ?></th>
		<th><?php echo __('Resolved Date'); ?></th>
		<th><?php echo __('Exit Date'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($device['Intervention'] as $intervention): ?>
		<tr>
			<td><?php echo $intervention['id'];?></td>
			<td><?php echo $intervention['device_id'];?></td>
			<td><?php echo $intervention['entry_date'];?></td>
			<td><?php echo $intervention['description'];?></td>
			<td><?php echo $intervention['diagnostic'];?></td>
			<td><?php echo $intervention['comment'];?></td>
			<td><?php echo $intervention['breakdown_found'];?></td>
			<td><?php echo $intervention['resolved_date'];?></td>
			<td><?php echo $intervention['exit_date'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'interventions', 'action' => 'view', $intervention['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'interventions', 'action' => 'edit', $intervention['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'interventions', 'action' => 'delete', $intervention['id']), null, __('Are you sure you want to delete # %s?', $intervention['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Intervention'), array('controller' => 'interventions', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Problems');?></h3>
	<?php if (!empty($device['Problem'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Problem Category Id'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($device['Problem'] as $problem): ?>
		<tr>
			<td><?php echo $problem['id'];?></td>
			<td><?php echo $problem['problem_category_id'];?></td>
			<td><?php echo $problem['description'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'problems', 'action' => 'view', $problem['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'problems', 'action' => 'edit', $problem['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'problems', 'action' => 'delete', $problem['id']), null, __('Are you sure you want to delete # %s?', $problem['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Problem'), array('controller' => 'problems', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Causes');?></h3>
	<?php if (!empty($device['Cause'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($device['Cause'] as $cause): ?>
		<tr>
			<td><?php echo $cause['id'];?></td>
			<td><?php echo $cause['description'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'causes', 'action' => 'view', $cause['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'causes', 'action' => 'edit', $cause['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'causes', 'action' => 'delete', $cause['id']), null, __('Are you sure you want to delete # %s?', $cause['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Cause'), array('controller' => 'causes', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
