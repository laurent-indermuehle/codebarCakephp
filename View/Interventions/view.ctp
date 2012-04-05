<div class="interventions view">
<h2><?php  echo __('Intervention');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($intervention['Intervention']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Device'); ?></dt>
		<dd>
			<?php echo $this->Html->link($intervention['Device']['id'], array('controller' => 'devices', 'action' => 'view', $intervention['Device']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Entry Date'); ?></dt>
		<dd>
			<?php echo h($intervention['Intervention']['entry_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($intervention['Intervention']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Diagnostic'); ?></dt>
		<dd>
			<?php echo h($intervention['Intervention']['diagnostic']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment'); ?></dt>
		<dd>
			<?php echo h($intervention['Intervention']['comment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Breakdown Found'); ?></dt>
		<dd>
			<?php echo h($intervention['Intervention']['breakdown_found']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resolved Date'); ?></dt>
		<dd>
			<?php echo h($intervention['Intervention']['resolved_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Exit Date'); ?></dt>
		<dd>
			<?php echo h($intervention['Intervention']['exit_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Intervention'), array('action' => 'edit', $intervention['Intervention']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Intervention'), array('action' => 'delete', $intervention['Intervention']['id']), null, __('Are you sure you want to delete # %s?', $intervention['Intervention']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Interventions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Intervention'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Devices'), array('controller' => 'devices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Device'), array('controller' => 'devices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Documents'), array('controller' => 'documents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Document'), array('controller' => 'documents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Emails'), array('controller' => 'emails', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Email'), array('controller' => 'emails', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estimates'), array('controller' => 'estimates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estimate'), array('controller' => 'estimates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List External Intervention Numbers'), array('controller' => 'external_intervention_numbers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New External Intervention Number'), array('controller' => 'external_intervention_numbers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Operations'), array('controller' => 'operations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Operation'), array('controller' => 'operations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Technical Loans'), array('controller' => 'technical_loans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Technical Loan'), array('controller' => 'technical_loans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Problems'), array('controller' => 'problems', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Problem'), array('controller' => 'problems', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Documents');?></h3>
	<?php if (!empty($intervention['Document'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Intervention Id'); ?></th>
		<th><?php echo __('Format'); ?></th>
		<th><?php echo __('Link'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($intervention['Document'] as $document): ?>
		<tr>
			<td><?php echo $document['id'];?></td>
			<td><?php echo $document['intervention_id'];?></td>
			<td><?php echo $document['format'];?></td>
			<td><?php echo $document['link'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'documents', 'action' => 'view', $document['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'documents', 'action' => 'edit', $document['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'documents', 'action' => 'delete', $document['id']), null, __('Are you sure you want to delete # %s?', $document['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Document'), array('controller' => 'documents', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Emails');?></h3>
	<?php if (!empty($intervention['Email'])):?>
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
		foreach ($intervention['Email'] as $email): ?>
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
	<h3><?php echo __('Related Estimates');?></h3>
	<?php if (!empty($intervention['Estimate'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Entry Date'); ?></th>
		<th><?php echo __('Deadline Date'); ?></th>
		<th><?php echo __('Intervention Id'); ?></th>
		<th><?php echo __('External Intervention Number Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($intervention['Estimate'] as $estimate): ?>
		<tr>
			<td><?php echo $estimate['id'];?></td>
			<td><?php echo $estimate['entry_date'];?></td>
			<td><?php echo $estimate['deadline_date'];?></td>
			<td><?php echo $estimate['intervention_id'];?></td>
			<td><?php echo $estimate['external_intervention_number_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'estimates', 'action' => 'view', $estimate['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'estimates', 'action' => 'edit', $estimate['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'estimates', 'action' => 'delete', $estimate['id']), null, __('Are you sure you want to delete # %s?', $estimate['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Estimate'), array('controller' => 'estimates', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related External Intervention Numbers');?></h3>
	<?php if (!empty($intervention['ExternalInterventionNumber'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Intervention Id'); ?></th>
		<th><?php echo __('Partner Id'); ?></th>
		<th><?php echo __('External Intervention Number Type Id'); ?></th>
		<th><?php echo __('Number'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($intervention['ExternalInterventionNumber'] as $externalInterventionNumber): ?>
		<tr>
			<td><?php echo $externalInterventionNumber['id'];?></td>
			<td><?php echo $externalInterventionNumber['intervention_id'];?></td>
			<td><?php echo $externalInterventionNumber['partner_id'];?></td>
			<td><?php echo $externalInterventionNumber['external_intervention_number_type_id'];?></td>
			<td><?php echo $externalInterventionNumber['number'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'external_intervention_numbers', 'action' => 'view', $externalInterventionNumber['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'external_intervention_numbers', 'action' => 'edit', $externalInterventionNumber['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'external_intervention_numbers', 'action' => 'delete', $externalInterventionNumber['id']), null, __('Are you sure you want to delete # %s?', $externalInterventionNumber['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New External Intervention Number'), array('controller' => 'external_intervention_numbers', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Operations');?></h3>
	<?php if (!empty($intervention['Operation'])):?>
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
		foreach ($intervention['Operation'] as $operation): ?>
		<tr>
			<td><?php echo $operation['id'];?></td>
			<td><?php echo $operation['intervention_id'];?></td>
			<td><?php echo $operation['operation_type_id'];?></td>
			<td><?php echo $operation['person_technician_id'];?></td>
			<td><?php echo $operation['date'];?></td>
			<td><?php echo $operation['location_id'];?></td>
			<td><?php echo $operation['estimate_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'operations', 'action' => 'view', $operation['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'operations', 'action' => 'edit', $operation['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'operations', 'action' => 'delete', $operation['id']), null, __('Are you sure you want to delete # %s?', $operation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Operation'), array('controller' => 'operations', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Technical Loans');?></h3>
	<?php if (!empty($intervention['TechnicalLoan'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Intervention Id'); ?></th>
		<th><?php echo __('Loan Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($intervention['TechnicalLoan'] as $technicalLoan): ?>
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
<div class="related">
	<h3><?php echo __('Related Problems');?></h3>
	<?php if (!empty($intervention['Problem'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Problem Category Id'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($intervention['Problem'] as $problem): ?>
		<tr>
			<td><?php echo $problem['id'];?></td>
			<td><?php echo $problem['problem_category_id'];?></td>
			<td><?php echo $problem['description'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'problems', 'action' => 'view', $problem['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'problems', 'action' => 'edit', $problem['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'problems', 'action' => 'delete', $problem['id']), null, __('Are you sure you want to delete # %s?', $problem['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Problem'), array('controller' => 'problems', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
