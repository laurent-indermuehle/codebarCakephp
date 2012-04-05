<div class="loans form">
<?php echo $this->Form->create('Loan');?>
	<fieldset>
		<legend><?php echo __('Edit Loan'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('person_customer_id');
		echo $this->Form->input('person_technician_id');
		echo $this->Form->input('Emprunt_Raison');
		echo $this->Form->input('borrow_date');
		echo $this->Form->input('Emprunt_DateRetour');
		echo $this->Form->input('PersonalLoan');
		echo $this->Form->input('TechnicalLoan');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Loan.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Loan.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Loans'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person Customer'), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Emails'), array('controller' => 'emails', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Email'), array('controller' => 'emails', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Loan Articles'), array('controller' => 'loan_articles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Loan Article'), array('controller' => 'loan_articles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personal Loans'), array('controller' => 'personal_loans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personal Loan'), array('controller' => 'personal_loans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Technical Loans'), array('controller' => 'technical_loans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Technical Loan'), array('controller' => 'technical_loans', 'action' => 'add')); ?> </li>
	</ul>
</div>
