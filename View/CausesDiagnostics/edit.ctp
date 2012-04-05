<div class="causesDiagnostics form">
<?php echo $this->Form->create('CausesDiagnostic');?>
	<fieldset>
		<legend><?php echo __('Edit Causes Diagnostic'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('diagnostic_id');
		echo $this->Form->input('cause_id');
		echo $this->Form->input('answer');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CausesDiagnostic.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('CausesDiagnostic.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Causes Diagnostics'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Diagnostics'), array('controller' => 'diagnostics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Diagnostic'), array('controller' => 'diagnostics', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Causes'), array('controller' => 'causes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cause'), array('controller' => 'causes', 'action' => 'add')); ?> </li>
	</ul>
</div>
