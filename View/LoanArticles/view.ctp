<div class="loanArticles view">
<h2><?php  echo __('Loan Article');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($loanArticle['LoanArticle']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Article'); ?></dt>
		<dd>
			<?php echo $this->Html->link($loanArticle['Article']['id'], array('controller' => 'articles', 'action' => 'view', $loanArticle['Article']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Loan'); ?></dt>
		<dd>
			<?php echo $this->Html->link($loanArticle['Loan']['id'], array('controller' => 'loans', 'action' => 'view', $loanArticle['Loan']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Person Technician Return'); ?></dt>
		<dd>
			<?php echo $this->Html->link($loanArticle['PersonTechnicianReturn']['id'], array('controller' => 'people', 'action' => 'view', $loanArticle['PersonTechnicianReturn']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Actual Return Date'); ?></dt>
		<dd>
			<?php echo h($loanArticle['LoanArticle']['actual_return_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Loan Article'), array('action' => 'edit', $loanArticle['LoanArticle']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Loan Article'), array('action' => 'delete', $loanArticle['LoanArticle']['id']), null, __('Are you sure you want to delete # %s?', $loanArticle['LoanArticle']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Loan Articles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Loan Article'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Articles'), array('controller' => 'articles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Article'), array('controller' => 'articles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Loans'), array('controller' => 'loans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Loan'), array('controller' => 'loans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person Technician Return'), array('controller' => 'people', 'action' => 'add')); ?> </li>
	</ul>
</div>
