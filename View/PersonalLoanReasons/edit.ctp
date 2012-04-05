<div class="personalLoanReasons form">
<?php echo $this->Form->create('PersonalLoanReason');?>
	<fieldset>
		<legend><?php echo __('Edit Personal Loan Reason'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('reason');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PersonalLoanReason.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('PersonalLoanReason.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Personal Loan Reasons'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Personal Loans'), array('controller' => 'personal_loans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personal Loan'), array('controller' => 'personal_loans', 'action' => 'add')); ?> </li>
	</ul>
</div>
