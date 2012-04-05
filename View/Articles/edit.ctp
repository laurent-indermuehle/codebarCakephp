<div class="articles form">
<?php echo $this->Form->create('Article');?>
	<fieldset>
		<legend><?php echo __('Edit Article'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('serial_number');
		echo $this->Form->input('description');
		echo $this->Form->input('part_of');
		echo $this->Form->input('location_id');
		echo $this->Form->input('is_active');
		echo $this->Form->input('is_available');
		echo $this->Form->input('article_type_id');
		echo $this->Form->input('etat');
		echo $this->Form->input('date_of_purchase');
		echo $this->Form->input('Loan');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Article.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Article.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Articles'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Article Types'), array('controller' => 'article_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Article Type'), array('controller' => 'article_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Article Damages'), array('controller' => 'article_damages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Article Damage'), array('controller' => 'article_damages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Loans'), array('controller' => 'loans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Loan'), array('controller' => 'loans', 'action' => 'add')); ?> </li>
	</ul>
</div>
