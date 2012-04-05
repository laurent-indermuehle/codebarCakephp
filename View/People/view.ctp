<div class="people view">
<h2><?php  echo __('Person');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($person['Person']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sciper'); ?></dt>
		<dd>
			<?php echo h($person['Person']['sciper']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($person['Person']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($person['Person']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($person['Person']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone Number'); ?></dt>
		<dd>
			<?php echo h($person['Person']['phone_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Technician'); ?></dt>
		<dd>
			<?php echo h($person['Person']['is_technician']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Banned'); ?></dt>
		<dd>
			<?php echo h($person['Person']['is_banned']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Language'); ?></dt>
		<dd>
			<?php echo $this->Html->link($person['Language']['name'], array('controller' => 'languages', 'action' => 'view', $person['Language']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Person'), array('action' => 'edit', $person['Person']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Person'), array('action' => 'delete', $person['Person']['id']), null, __('Are you sure you want to delete # %s?', $person['Person']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Languages'), array('controller' => 'languages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Language'), array('controller' => 'languages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Devices'), array('controller' => 'devices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Device'), array('controller' => 'devices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Emails'), array('controller' => 'emails', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Email To Person'), array('controller' => 'emails', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Loans'), array('controller' => 'loans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Loan Customer'), array('controller' => 'loans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Operations'), array('controller' => 'operations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Operation Technician'), array('controller' => 'operations', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Devices');?></h3>
	<?php if (!empty($person['Device'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Date End Of Warranty'); ?></th>
		<th><?php echo __('Date First Seen'); ?></th>
		<th><?php echo __('Serial Number'); ?></th>
		<th><?php echo __('Device Type'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($person['Device'] as $device): ?>
		<tr>
			<td><?php echo $device['id'];?></td>
			<td><?php echo $device['date_end_of_warranty'];?></td>
			<td><?php echo $device['date_first_seen'];?></td>
			<td><?php echo $device['serial_number'];?></td>
			<td><?php echo $device['DeviceType']['name'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'devices', 'action' => 'view', $device['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'devices', 'action' => 'edit', $device['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'devices', 'action' => 'delete', $device['id']), null, __('Are you sure you want to delete # %s?', $device['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Device'), array('controller' => 'devices', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Emails');?></h3>
	<?php if (!empty($person['EmailToPerson'])):?>
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
		foreach ($person['EmailToPerson'] as $emailToPerson): ?>
		<tr>
			<td><?php echo $emailToPerson['id'];?></td>
			<td><?php echo $emailToPerson['header'];?></td>
			<td><?php echo $emailToPerson['title'];?></td>
			<td><?php echo $emailToPerson['message'];?></td>
			<td><?php echo $emailToPerson['loan_id'];?></td>
			<td><?php echo $emailToPerson['intervention_id'];?></td>
			<td><?php echo $emailToPerson['to_person_email'];?></td>
			<td><?php echo $emailToPerson['to_person_id'];?></td>
			<td><?php echo $emailToPerson['date'];?></td>
			<td><?php echo $emailToPerson['from_person_email'];?></td>
			<td><?php echo $emailToPerson['from_person_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'emails', 'action' => 'view', $emailToPerson['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'emails', 'action' => 'edit', $emailToPerson['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'emails', 'action' => 'delete', $emailToPerson['id']), null, __('Are you sure you want to delete # %s?', $emailToPerson['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Email To Person'), array('controller' => 'emails', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Emails');?></h3>
	<?php if (!empty($person['EmailFromPerson'])):?>
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
		foreach ($person['EmailFromPerson'] as $emailFromPerson): ?>
		<tr>
			<td><?php echo $emailFromPerson['id'];?></td>
			<td><?php echo $emailFromPerson['header'];?></td>
			<td><?php echo $emailFromPerson['title'];?></td>
			<td><?php echo $emailFromPerson['message'];?></td>
			<td><?php echo $emailFromPerson['loan_id'];?></td>
			<td><?php echo $emailFromPerson['intervention_id'];?></td>
			<td><?php echo $emailFromPerson['to_person_email'];?></td>
			<td><?php echo $emailFromPerson['to_person_id'];?></td>
			<td><?php echo $emailFromPerson['date'];?></td>
			<td><?php echo $emailFromPerson['from_person_email'];?></td>
			<td><?php echo $emailFromPerson['from_person_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'emails', 'action' => 'view', $emailFromPerson['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'emails', 'action' => 'edit', $emailFromPerson['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'emails', 'action' => 'delete', $emailFromPerson['id']), null, __('Are you sure you want to delete # %s?', $emailFromPerson['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Email From Person'), array('controller' => 'emails', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Loans');?></h3>
	<?php if (!empty($person['LoanCustomer'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Person Customer Id'); ?></th>
		<th><?php echo __('Person Technician Id'); ?></th>
		<th><?php echo __('Emprunt Raison'); ?></th>
		<th><?php echo __('Borrow Date'); ?></th>
		<th><?php echo __('Emprunt DateRetour'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($person['LoanCustomer'] as $loanCustomer): ?>
		<tr>
			<td><?php echo $loanCustomer['id'];?></td>
			<td><?php echo $loanCustomer['person_customer_id'];?></td>
			<td><?php echo $loanCustomer['person_technician_id'];?></td>
			<td><?php echo $loanCustomer['Emprunt_Raison'];?></td>
			<td><?php echo $loanCustomer['borrow_date'];?></td>
			<td><?php echo $loanCustomer['Emprunt_DateRetour'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'loans', 'action' => 'view', $loanCustomer['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'loans', 'action' => 'edit', $loanCustomer['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'loans', 'action' => 'delete', $loanCustomer['id']), null, __('Are you sure you want to delete # %s?', $loanCustomer['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Loan Customer'), array('controller' => 'loans', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Loans');?></h3>
	<?php if (!empty($person['LoanTechnician'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Person Customer Id'); ?></th>
		<th><?php echo __('Person Technician Id'); ?></th>
		<th><?php echo __('Emprunt Raison'); ?></th>
		<th><?php echo __('Borrow Date'); ?></th>
		<th><?php echo __('Emprunt DateRetour'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($person['LoanTechnician'] as $loanTechnician): ?>
		<tr>
			<td><?php echo $loanTechnician['id'];?></td>
			<td><?php echo $loanTechnician['person_customer_id'];?></td>
			<td><?php echo $loanTechnician['person_technician_id'];?></td>
			<td><?php echo $loanTechnician['Emprunt_Raison'];?></td>
			<td><?php echo $loanTechnician['borrow_date'];?></td>
			<td><?php echo $loanTechnician['Emprunt_DateRetour'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'loans', 'action' => 'view', $loanTechnician['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'loans', 'action' => 'edit', $loanTechnician['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'loans', 'action' => 'delete', $loanTechnician['id']), null, __('Are you sure you want to delete # %s?', $loanTechnician['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Loan Technician'), array('controller' => 'loans', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Operations');?></h3>
	<?php if (!empty($person['OperationTechnician'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Intervention Id'); ?></th>
		<th><?php echo __('Operation Type Id'); ?></th>
		<th><?php echo __('Person Technician Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th><?php echo __('Estimate Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($person['OperationTechnician'] as $operationTechnician): ?>
		<tr>
			<td><?php echo $operationTechnician['id'];?></td>
			<td><?php echo $operationTechnician['intervention_id'];?></td>
			<td><?php echo $operationTechnician['operation_type_id'];?></td>
			<td><?php echo $operationTechnician['person_technician_id'];?></td>
			<td><?php echo $operationTechnician['date'];?></td>
			<td><?php echo $operationTechnician['location_id'];?></td>
			<td><?php echo $operationTechnician['estimate_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'operations', 'action' => 'view', $operationTechnician['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'operations', 'action' => 'edit', $operationTechnician['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'operations', 'action' => 'delete', $operationTechnician['id']), null, __('Are you sure you want to delete # %s?', $operationTechnician['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Operation Technician'), array('controller' => 'operations', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
