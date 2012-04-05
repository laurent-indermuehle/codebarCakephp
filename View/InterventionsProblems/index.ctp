<div class="interventionsProblems index">
	<h2><?php echo __('Interventions Problems');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('problem_id');?></th>
			<th><?php echo $this->Paginator->sort('intervention_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($interventionsProblems as $interventionsProblem): ?>
	<tr>
		<td><?php echo h($interventionsProblem['InterventionsProblem']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($interventionsProblem['Problem']['id'], array('controller' => 'problems', 'action' => 'view', $interventionsProblem['Problem']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($interventionsProblem['Intervention']['id'], array('controller' => 'interventions', 'action' => 'view', $interventionsProblem['Intervention']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $interventionsProblem['InterventionsProblem']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $interventionsProblem['InterventionsProblem']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $interventionsProblem['InterventionsProblem']['id']), null, __('Are you sure you want to delete # %s?', $interventionsProblem['InterventionsProblem']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Interventions Problem'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Problems'), array('controller' => 'problems', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Problem'), array('controller' => 'problems', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Interventions'), array('controller' => 'interventions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Intervention'), array('controller' => 'interventions', 'action' => 'add')); ?> </li>
	</ul>
</div>
