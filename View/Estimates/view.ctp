<div class="estimates view">
<h2><?php  echo __('Estimate');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($estimate['Estimate']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entry Date'); ?></dt>
		<dd>
			<?php echo h($estimate['Estimate']['entry_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deadline Date'); ?></dt>
		<dd>
			<?php echo h($estimate['Estimate']['deadline_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Intervention'); ?></dt>
		<dd>
			<?php echo $this->Html->link($estimate['Intervention']['id'], array('controller' => 'interventions', 'action' => 'view', $estimate['Intervention']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('External Intervention Number'); ?></dt>
		<dd>
			<?php echo $this->Html->link($estimate['ExternalInterventionNumber']['id'], array('controller' => 'external_intervention_numbers', 'action' => 'view', $estimate['ExternalInterventionNumber']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Estimate'), array('action' => 'edit', $estimate['Estimate']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Estimate'), array('action' => 'delete', $estimate['Estimate']['id']), null, __('Are you sure you want to delete # %s?', $estimate['Estimate']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Estimates'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estimate'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Interventions'), array('controller' => 'interventions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Intervention'), array('controller' => 'interventions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List External Intervention Numbers'), array('controller' => 'external_intervention_numbers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New External Intervention Number'), array('controller' => 'external_intervention_numbers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estimate Items'), array('controller' => 'estimate_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estimate Item'), array('controller' => 'estimate_items', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Operations'), array('controller' => 'operations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Operation'), array('controller' => 'operations', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Estimate Items');?></h3>
	<?php if (!empty($estimate['EstimateItem'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Estimate Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Quantity'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($estimate['EstimateItem'] as $estimateItem): ?>
		<tr>
			<td><?php echo $estimateItem['id'];?></td>
			<td><?php echo $estimateItem['estimate_id'];?></td>
			<td><?php echo $estimateItem['name'];?></td>
			<td><?php echo $estimateItem['quantity'];?></td>
			<td><?php echo $estimateItem['price'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'estimate_items', 'action' => 'view', $estimateItem['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'estimate_items', 'action' => 'edit', $estimateItem['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'estimate_items', 'action' => 'delete', $estimateItem['id']), null, __('Are you sure you want to delete # %s?', $estimateItem['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Estimate Item'), array('controller' => 'estimate_items', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Operations');?></h3>
	<?php if (!empty($estimate['Operation'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Intervention Id'); ?></th>
		<th><?php echo __('Operation Type Id'); ?></th>
		<th><?php echo __('Person Technician Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th><?php echo __('Estimate Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($estimate['Operation'] as $operation): ?>
		<tr>
			<td><?php echo $operation['id'];?></td>
			<td><?php echo $operation['intervention_id'];?></td>
			<td><?php echo $operation['operation_type_id'];?></td>
			<td><?php echo $operation['person_technician_id'];?></td>
			<td><?php echo $operation['date'];?></td>
			<td><?php echo $operation['location_id'];?></td>
			<td><?php echo $operation['estimate_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'operations', 'action' => 'view', $operation['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'operations', 'action' => 'edit', $operation['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'operations', 'action' => 'delete', $operation['id']), null, __('Are you sure you want to delete # %s?', $operation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Operation'), array('controller' => 'operations', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
