<div class="emails form">
<?php echo $this->Form->create('Email');?>
	<fieldset>
		<legend><?php echo __('Add Email'); ?></legend>
	<?php
		echo $this->Form->input('header');
		echo $this->Form->input('title');
		echo $this->Form->input('message');
		echo $this->Form->input('loan_id');
		echo $this->Form->input('intervention_id');
		echo $this->Form->input('to_person_email');
		echo $this->Form->input('to_person_id');
		echo $this->Form->input('date');
		echo $this->Form->input('from_person_email');
		echo $this->Form->input('from_person_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Emails'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Loans'), array('controller' => 'loans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Loan'), array('controller' => 'loans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Interventions'), array('controller' => 'interventions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Intervention'), array('controller' => 'interventions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New To Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
	</ul>
</div>
