<div class="estimateItems form">
<?php echo $this->Form->create('EstimateItem');?>
	<fieldset>
		<legend><?php echo __('Add Estimate Item'); ?></legend>
	<?php
		echo $this->Form->input('estimate_id');
		echo $this->Form->input('name');
		echo $this->Form->input('quantity');
		echo $this->Form->input('price');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Estimate Items'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Estimates'), array('controller' => 'estimates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estimate'), array('controller' => 'estimates', 'action' => 'add')); ?> </li>
	</ul>
</div>
