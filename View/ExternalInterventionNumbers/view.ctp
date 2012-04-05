<div class="externalInterventionNumbers view">
<h2><?php  echo __('External Intervention Number');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($externalInterventionNumber['ExternalInterventionNumber']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Intervention'); ?></dt>
		<dd>
			<?php echo $this->Html->link($externalInterventionNumber['Intervention']['id'], array('controller' => 'interventions', 'action' => 'view', $externalInterventionNumber['Intervention']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Partner'); ?></dt>
		<dd>
			<?php echo $this->Html->link($externalInterventionNumber['Partner']['name'], array('controller' => 'partners', 'action' => 'view', $externalInterventionNumber['Partner']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('External Intervention Number Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($externalInterventionNumber['ExternalInterventionNumberType']['name'], array('controller' => 'external_intervention_number_types', 'action' => 'view', $externalInterventionNumber['ExternalInterventionNumberType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Number'); ?></dt>
		<dd>
			<?php echo h($externalInterventionNumber['ExternalInterventionNumber']['number']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit External Intervention Number'), array('action' => 'edit', $externalInterventionNumber['ExternalInterventionNumber']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete External Intervention Number'), array('action' => 'delete', $externalInterventionNumber['ExternalInterventionNumber']['id']), null, __('Are you sure you want to delete # %s?', $externalInterventionNumber['ExternalInterventionNumber']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List External Intervention Numbers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New External Intervention Number'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Interventions'), array('controller' => 'interventions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Intervention'), array('controller' => 'interventions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Partners'), array('controller' => 'partners', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partner'), array('controller' => 'partners', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List External Intervention Number Types'), array('controller' => 'external_intervention_number_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New External Intervention Number Type'), array('controller' => 'external_intervention_number_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estimates'), array('controller' => 'estimates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estimate'), array('controller' => 'estimates', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Estimates');?></h3>
	<?php if (!empty($externalInterventionNumber['Estimate'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Entry Date'); ?></th>
		<th><?php echo __('Deadline Date'); ?></th>
		<th><?php echo __('Intervention Id'); ?></th>
		<th><?php echo __('External Intervention Number Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($externalInterventionNumber['Estimate'] as $estimate): ?>
		<tr>
			<td><?php echo $estimate['id'];?></td>
			<td><?php echo $estimate['entry_date'];?></td>
			<td><?php echo $estimate['deadline_date'];?></td>
			<td><?php echo $estimate['intervention_id'];?></td>
			<td><?php echo $estimate['external_intervention_number_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'estimates', 'action' => 'view', $estimate['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'estimates', 'action' => 'edit', $estimate['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'estimates', 'action' => 'delete', $estimate['id']), null, __('Are you sure you want to delete # %s?', $estimate['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Estimate'), array('controller' => 'estimates', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
