<div class="problems form">
<?php echo $this->Form->create('Problem');?>
	<fieldset>
		<legend><?php echo __('Edit Problem'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('problem_category_id');
		echo $this->Form->input('description');
		echo $this->Form->input('Cause');
		echo $this->Form->input('Intervention');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Problem.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Problem.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Problems'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Problem Categories'), array('controller' => 'problem_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Problem Category'), array('controller' => 'problem_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Causes'), array('controller' => 'causes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cause'), array('controller' => 'causes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Interventions'), array('controller' => 'interventions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Intervention'), array('controller' => 'interventions', 'action' => 'add')); ?> </li>
	</ul>
</div>
