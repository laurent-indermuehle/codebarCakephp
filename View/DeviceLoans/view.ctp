<div class="deviceLoans view">
<h2><?php  echo __('Device Loan');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($deviceLoan['DeviceLoan']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Device'); ?></dt>
		<dd>
			<?php echo $this->Html->link($deviceLoan['Device']['id'], array('controller' => 'devices', 'action' => 'view', $deviceLoan['Device']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Loan'); ?></dt>
		<dd>
			<?php echo $this->Html->link($deviceLoan['Loan']['id'], array('controller' => 'loans', 'action' => 'view', $deviceLoan['Loan']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Person Techncian Return'); ?></dt>
		<dd>
			<?php echo $this->Html->link($deviceLoan['PersonTechncianReturn']['full_name_with_sciper'], array('controller' => 'people', 'action' => 'view', $deviceLoan['PersonTechncianReturn']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Actual Return Date'); ?></dt>
		<dd>
			<?php echo h($deviceLoan['DeviceLoan']['actual_return_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Device Loan'), array('action' => 'edit', $deviceLoan['DeviceLoan']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Device Loan'), array('action' => 'delete', $deviceLoan['DeviceLoan']['id']), null, __('Are you sure you want to delete # %s?', $deviceLoan['DeviceLoan']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Device Loans'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Device Loan'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Devices'), array('controller' => 'devices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Device'), array('controller' => 'devices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Loans'), array('controller' => 'loans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Loan'), array('controller' => 'loans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person Techncian Return'), array('controller' => 'people', 'action' => 'add')); ?> </li>
	</ul>
</div>
