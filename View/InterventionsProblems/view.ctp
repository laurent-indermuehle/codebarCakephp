<div class="interventionsProblems view">
<h2><?php  echo __('Interventions Problem');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($interventionsProblem['InterventionsProblem']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Problem'); ?></dt>
		<dd>
			<?php echo $this->Html->link($interventionsProblem['Problem']['id'], array('controller' => 'problems', 'action' => 'view', $interventionsProblem['Problem']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Intervention'); ?></dt>
		<dd>
			<?php echo $this->Html->link($interventionsProblem['Intervention']['id'], array('controller' => 'interventions', 'action' => 'view', $interventionsProblem['Intervention']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Interventions Problem'), array('action' => 'edit', $interventionsProblem['InterventionsProblem']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Interventions Problem'), array('action' => 'delete', $interventionsProblem['InterventionsProblem']['id']), null, __('Are you sure you want to delete # %s?', $interventionsProblem['InterventionsProblem']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Interventions Problems'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Interventions Problem'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Problems'), array('controller' => 'problems', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Problem'), array('controller' => 'problems', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Interventions'), array('controller' => 'interventions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Intervention'), array('controller' => 'interventions', 'action' => 'add')); ?> </li>
	</ul>
</div>
