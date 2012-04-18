<div class="loans view">
<h2><?php  echo __('Loan');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($loan['Loan']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Person Customer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($loan['PersonCustomer']['id'], array('controller' => 'people', 'action' => 'view', $loan['PersonCustomer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Person Technician'); ?></dt>
		<dd>
			<?php echo $this->Html->link($loan['PersonTechnician']['id'], array('controller' => 'people', 'action' => 'view', $loan['PersonTechnician']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Borrow Date'); ?></dt>
		<dd>
			<?php echo h($loan['Loan']['borrow_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Loan'), array('action' => 'edit', $loan['Loan']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Loan'), array('action' => 'delete', $loan['Loan']['id']), null, __('Are you sure you want to delete # %s?', $loan['Loan']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Loans'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Loan'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Emails');?></h3>
	<?php if (!empty($loan['Email'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Header'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Message'); ?></th>
		<th><?php echo __('Loan Id'); ?></th>
		<th><?php echo __('Intervention Id'); ?></th>
		<th><?php echo __('To Person Email'); ?></th>
		<th><?php echo __('To Person Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('From Person Email'); ?></th>
		<th><?php echo __('From Person Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($loan['Email'] as $email): ?>
		<tr>
			<td><?php echo $email['id'];?></td>
			<td><?php echo $email['header'];?></td>
			<td><?php echo $email['title'];?></td>
			<td><?php echo $email['message'];?></td>
			<td><?php echo $email['loan_id'];?></td>
			<td><?php echo $email['intervention_id'];?></td>
			<td><?php echo $email['to_person_email'];?></td>
			<td><?php echo $email['to_person_id'];?></td>
			<td><?php echo $email['date'];?></td>
			<td><?php echo $email['from_person_email'];?></td>
			<td><?php echo $email['from_person_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'emails', 'action' => 'view', $email['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'emails', 'action' => 'edit', $email['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'emails', 'action' => 'delete', $email['id']), null, __('Are you sure you want to delete # %s?', $email['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Email'), array('controller' => 'emails', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Loan Articles');?></h3>
	<?php if (!empty($loan['DeviceLoan'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Article Id'); ?></th>
		<th><?php echo __('Loan Id'); ?></th>
		<th><?php echo __('Person Technician Return Id'); ?></th>
		<th><?php echo __('Actual Return Date'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($loan['DeviceLoan'] as $deviceLoan): ?>
		<tr>
			<td><?php echo $deviceLoan['id'];?></td>
			<td><?php echo $deviceLoan['device_id'];?></td>
			<td><?php echo $deviceLoan['loan_id'];?></td>
			<td><?php echo $deviceLoan['person_technician_return_id'];?></td>
			<td><?php echo $deviceLoan['actual_return_date'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'device_loans', 'action' => 'view', $deviceLoan['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'device_loans', 'action' => 'edit', $deviceLoan['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'loan_articles', 'action' => 'delete', $deviceLoan['id']), null, __('Are you sure you want to delete # %s?', $deviceLoan['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Loan Article'), array('controller' => 'loan_articles', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Personal Loans');?></h3>
	<?php if (!empty($loan['PersonalLoan'])):?>
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
		foreach ($loan['PersonalLoan'] as $personalLoan): ?>
		<tr>
			<td><?php echo $personalLoan['id'];?></td>
			<td><?php echo $personalLoan['loan_id'];?></td>
			<td><?php echo $personalLoan['personal_loan_reason_id'];?></td>
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
<div class="related">
	<h3><?php echo __('Related Technical Loans');?></h3>
	<?php if (!empty($loan['TechnicalLoan'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Intervention Id'); ?></th>
		<th><?php echo __('Loan Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($loan['TechnicalLoan'] as $technicalLoan): ?>
		<tr>
			<td><?php echo $technicalLoan['id'];?></td>
			<td><?php echo $technicalLoan['intervention_id'];?></td>
			<td><?php echo $technicalLoan['loan_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'technical_loans', 'action' => 'view', $technicalLoan['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'technical_loans', 'action' => 'edit', $technicalLoan['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'technical_loans', 'action' => 'delete', $technicalLoan['id']), null, __('Are you sure you want to delete # %s?', $technicalLoan['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Technical Loan'), array('controller' => 'technical_loans', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
