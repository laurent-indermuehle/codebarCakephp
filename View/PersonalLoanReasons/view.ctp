<div class="personalLoanReasons view">
<h2><?php  echo __('Personal Loan Reason');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($personalLoanReason['PersonalLoanReason']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reason'); ?></dt>
		<dd>
			<?php echo h($personalLoanReason['PersonalLoanReason']['reason']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Personal Loan Reason'), array('action' => 'edit', $personalLoanReason['PersonalLoanReason']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Personal Loan Reason'), array('action' => 'delete', $personalLoanReason['PersonalLoanReason']['id']), null, __('Are you sure you want to delete # %s?', $personalLoanReason['PersonalLoanReason']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Personal Loan Reasons'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personal Loan Reason'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personal Loans'), array('controller' => 'personal_loans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personal Loan'), array('controller' => 'personal_loans', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Personal Loans');?></h3>
	<?php if (!empty($personalLoanReason['PersonalLoan'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Loan Id'); ?></th>
		<th><?php echo __('Emprunt IdxSciper'); ?></th>
		<th><?php echo __('Emprunt IdxTechnicien'); ?></th>
		<th><?php echo __('Personal Loan Reason Id'); ?></th>
		<th><?php echo __('Emprunt Date'); ?></th>
		<th><?php echo __('Planned Return Date'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($personalLoanReason['PersonalLoan'] as $personalLoan): ?>
		<tr>
			<td><?php echo $personalLoan['id'];?></td>
			<td><?php echo $personalLoan['loan_id'];?></td>
			<td><?php echo $personalLoan['Emprunt_IdxSciper'];?></td>
			<td><?php echo $personalLoan['Emprunt_IdxTechnicien'];?></td>
			<td><?php echo $personalLoan['personal_loan_reason_id'];?></td>
			<td><?php echo $personalLoan['Emprunt_Date'];?></td>
			<td><?php echo $personalLoan['planned_return_date'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'personal_loans', 'action' => 'view', $personalLoan['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'personal_loans', 'action' => 'edit', $personalLoan['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'personal_loans', 'action' => 'delete', $personalLoan['id']), null, __('Are you sure you want to delete # %s?', $personalLoan['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Personal Loan'), array('controller' => 'personal_loans', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
