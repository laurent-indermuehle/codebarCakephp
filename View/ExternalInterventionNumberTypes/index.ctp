<div class="externalInterventionNumberTypes index">
	<h2><?php echo __('External Intervention Number Types');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('partner_id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($externalInterventionNumberTypes as $externalInterventionNumberType): ?>
	<tr>
		<td><?php echo h($externalInterventionNumberType['ExternalInterventionNumberType']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($externalInterventionNumberType['Partner']['name'], array('controller' => 'partners', 'action' => 'view', $externalInterventionNumberType['Partner']['id'])); ?>
		</td>
		<td><?php echo h($externalInterventionNumberType['ExternalInterventionNumberType']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $externalInterventionNumberType['ExternalInterventionNumberType']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $externalInterventionNumberType['ExternalInterventionNumberType']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $externalInterventionNumberType['ExternalInterventionNumberType']['id']), null, __('Are you sure you want to delete # %s?', $externalInterventionNumberType['ExternalInterventionNumberType']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New External Intervention Number Type'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Partners'), array('controller' => 'partners', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partner'), array('controller' => 'partners', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List External Intervention Numbers'), array('controller' => 'external_intervention_numbers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New External Intervention Number'), array('controller' => 'external_intervention_numbers', 'action' => 'add')); ?> </li>
	</ul>
</div>
