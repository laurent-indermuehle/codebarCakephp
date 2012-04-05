<div class="problems view">
<h2><?php  echo __('Problem');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($problem['Problem']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Problem Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($problem['ProblemCategory']['name'], array('controller' => 'problem_categories', 'action' => 'view', $problem['ProblemCategory']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($problem['Problem']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Problem'), array('action' => 'edit', $problem['Problem']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Problem'), array('action' => 'delete', $problem['Problem']['id']), null, __('Are you sure you want to delete # %s?', $problem['Problem']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Problems'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Problem'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Problem Categories'), array('controller' => 'problem_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Problem Category'), array('controller' => 'problem_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Causes'), array('controller' => 'causes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cause'), array('controller' => 'causes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Interventions'), array('controller' => 'interventions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Intervention'), array('controller' => 'interventions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Causes');?></h3>
	<?php if (!empty($problem['Cause'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($problem['Cause'] as $cause): ?>
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
<div class="related">
	<h3><?php echo __('Related Interventions');?></h3>
	<?php if (!empty($problem['Intervention'])):?>
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
		foreach ($problem['Intervention'] as $intervention): ?>
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
