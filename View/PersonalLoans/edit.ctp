<div class="personalLoans form">
<?php echo $this->Form->create('PersonalLoan');?>
	<fieldset>
		<legend><?php echo __('Edit Personal Loan'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('loan_id');
		echo $this->Form->input('Emprunt_IdxSciper');
		echo $this->Form->input('Emprunt_IdxTechnicien');
		echo $this->Form->input('personal_loan_reason_id');
		echo $this->Form->input('Emprunt_Date');
		echo $this->Form->input('planned_return_date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PersonalLoan.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('PersonalLoan.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Personal Loans'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Loans'), array('controller' => 'loans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Loan'), array('controller' => 'loans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personal Loan Reasons'), array('controller' => 'personal_loan_reasons', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personal Loan Reason'), array('controller' => 'personal_loan_reasons', 'action' => 'add')); ?> </li>
	</ul>
</div>
