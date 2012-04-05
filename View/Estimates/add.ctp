<div class="estimates form">
<?php echo $this->Form->create('Estimate');?>
	<fieldset>
		<legend><?php echo __('Add Estimate'); ?></legend>
	<?php
		echo $this->Form->input('entry_date');
		echo $this->Form->input('deadline_date');
		echo $this->Form->input('intervention_id');
		echo $this->Form->input('external_intervention_number_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Estimates'), array('action' => 'index'));?></li>
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
