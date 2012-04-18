<div class="personalLoans view">
<h2><?php  echo __('Personal Loan');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($personalLoan['PersonalLoan']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Loan'); ?></dt>
		<dd>
			<?php echo $this->Html->link($personalLoan['Loan']['id'], array('controller' => 'loans', 'action' => 'view', $personalLoan['Loan']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Personal Loan Reason'); ?></dt>
		<dd>
			<?php echo $this->Html->link($personalLoan['PersonalLoanReason']['id'], array('controller' => 'personal_loan_reasons', 'action' => 'view', $personalLoan['PersonalLoanReason']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Planned Return Date'); ?></dt>
		<dd>
			<?php echo h($personalLoan['PersonalLoan']['planned_return_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Personal Loan'), array('action' => 'edit', $personalLoan['PersonalLoan']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Personal Loan'), array('action' => 'delete', $personalLoan['PersonalLoan']['id']), null, __('Are you sure you want to delete # %s?', $personalLoan['PersonalLoan']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Personal Loans'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personal Loan'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Loans'), array('controller' => 'loans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Loan'), array('controller' => 'loans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personal Loan Reasons'), array('controller' => 'personal_loan_reasons', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personal Loan Reason'), array('controller' => 'personal_loan_reasons', 'action' => 'add')); ?> </li>
	</ul>
</div>
