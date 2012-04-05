<div class="diagnostics form">
<?php echo $this->Form->create('Diagnostic');?>
	<fieldset>
		<legend><?php echo __('Edit Diagnostic'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('question');
		echo $this->Form->input('description');
		echo $this->Form->input('Cause');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Diagnostic.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Diagnostic.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Diagnostics'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Causes'), array('controller' => 'causes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cause'), array('controller' => 'causes', 'action' => 'add')); ?> </li>
	</ul>
</div>
