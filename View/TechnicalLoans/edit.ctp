<div class="technicalLoans form">
<?php echo $this->Form->create('TechnicalLoan');?>
	<fieldset>
		<legend><?php echo __('Edit Technical Loan'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('intervention_id');
		echo $this->Form->input('loan_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('TechnicalLoan.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('TechnicalLoan.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Technical Loans'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Interventions'), array('controller' => 'interventions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Intervention'), array('controller' => 'interventions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Loans'), array('controller' => 'loans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Loan'), array('controller' => 'loans', 'action' => 'add')); ?> </li>
	</ul>
</div>
