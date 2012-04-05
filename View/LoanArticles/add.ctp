<div class="loanArticles form">
<?php echo $this->Form->create('LoanArticle');?>
	<fieldset>
		<legend><?php echo __('Add Loan Article'); ?></legend>
	<?php
		echo $this->Form->input('article_id');
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

		<li><?php echo $this->Html->link(__('List Loan Articles'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Articles'), array('controller' => 'articles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Article'), array('controller' => 'articles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Loans'), array('controller' => 'loans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Loan'), array('controller' => 'loans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person Technician Return'), array('controller' => 'people', 'action' => 'add')); ?> </li>
	</ul>
</div>
