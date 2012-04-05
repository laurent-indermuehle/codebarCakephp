<div class="externalInterventionNumberTypes view">
<h2><?php  echo __('External Intervention Number Type');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($externalInterventionNumberType['ExternalInterventionNumberType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Partner'); ?></dt>
		<dd>
			<?php echo $this->Html->link($externalInterventionNumberType['Partner']['name'], array('controller' => 'partners', 'action' => 'view', $externalInterventionNumberType['Partner']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($externalInterventionNumberType['ExternalInterventionNumberType']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit External Intervention Number Type'), array('action' => 'edit', $externalInterventionNumberType['ExternalInterventionNumberType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete External Intervention Number Type'), array('action' => 'delete', $externalInterventionNumberType['ExternalInterventionNumberType']['id']), null, __('Are you sure you want to delete # %s?', $externalInterventionNumberType['ExternalInterventionNumberType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List External Intervention Number Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New External Intervention Number Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Partners'), array('controller' => 'partners', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partner'), array('controller' => 'partners', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List External Intervention Numbers'), array('controller' => 'external_intervention_numbers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New External Intervention Number'), array('controller' => 'external_intervention_numbers', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related External Intervention Numbers');?></h3>
	<?php if (!empty($externalInterventionNumberType['ExternalInterventionNumber'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Intervention Id'); ?></th>
		<th><?php echo __('Partner Id'); ?></th>
		<th><?php echo __('External Intervention Number Type Id'); ?></th>
		<th><?php echo __('Number'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($externalInterventionNumberType['ExternalInterventionNumber'] as $externalInterventionNumber): ?>
		<tr>
			<td><?php echo $externalInterventionNumber['id'];?></td>
			<td><?php echo $externalInterventionNumber['intervention_id'];?></td>
			<td><?php echo $externalInterventionNumber['partner_id'];?></td>
			<td><?php echo $externalInterventionNumber['external_intervention_number_type_id'];?></td>
			<td><?php echo $externalInterventionNumber['number'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'external_intervention_numbers', 'action' => 'view', $externalInterventionNumber['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'external_intervention_numbers', 'action' => 'edit', $externalInterventionNumber['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'external_intervention_numbers', 'action' => 'delete', $externalInterventionNumber['id']), null, __('Are you sure you want to delete # %s?', $externalInterventionNumber['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New External Intervention Number'), array('controller' => 'external_intervention_numbers', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
