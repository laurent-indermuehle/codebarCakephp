<div class="deviceLoans form">
<?php echo $this->Form->create('DeviceLoan');?>
	<fieldset>
		<legend><?php echo __('Edit Device Loan'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('device_id');
		echo $this->Form->input('loan_id');
		echo $this->Form->input('person_technician_return_id');
		echo $this->Form->input('actual_return_date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DeviceLoan.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('DeviceLoan.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Device Loans'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Devices'), array('controller' => 'devices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Device'), array('controller' => 'devices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Loans'), array('controller' => 'loans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Loan'), array('controller' => 'loans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person Techncian Return'), array('controller' => 'people', 'action' => 'add')); ?> </li>
	</ul>
</div>
