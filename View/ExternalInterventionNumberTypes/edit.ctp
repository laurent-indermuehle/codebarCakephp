<div class="externalInterventionNumberTypes form">
<?php echo $this->Form->create('ExternalInterventionNumberType');?>
	<fieldset>
		<legend><?php echo __('Edit External Intervention Number Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('partner_id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ExternalInterventionNumberType.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ExternalInterventionNumberType.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List External Intervention Number Types'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Partners'), array('controller' => 'partners', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partner'), array('controller' => 'partners', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List External Intervention Numbers'), array('controller' => 'external_intervention_numbers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New External Intervention Number'), array('controller' => 'external_intervention_numbers', 'action' => 'add')); ?> </li>
	</ul>
</div>
