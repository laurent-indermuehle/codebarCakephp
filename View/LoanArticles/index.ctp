<div class="loanArticles index">
	<h2><?php echo __('Loan Articles');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('article_id');?></th>
			<th><?php echo $this->Paginator->sort('loan_id');?></th>
			<th><?php echo $this->Paginator->sort('person_technician_return_id');?></th>
			<th><?php echo $this->Paginator->sort('actual_return_date');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($loanArticles as $loanArticle): ?>
	<tr>
		<td><?php echo h($loanArticle['LoanArticle']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($loanArticle['Article']['id'], array('controller' => 'articles', 'action' => 'view', $loanArticle['Article']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($loanArticle['Loan']['id'], array('controller' => 'loans', 'action' => 'view', $loanArticle['Loan']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($loanArticle['PersonTechnicianReturn']['id'], array('controller' => 'people', 'action' => 'view', $loanArticle['PersonTechnicianReturn']['id'])); ?>
		</td>
		<td><?php echo h($loanArticle['LoanArticle']['actual_return_date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $loanArticle['LoanArticle']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $loanArticle['LoanArticle']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $loanArticle['LoanArticle']['id']), null, __('Are you sure you want to delete # %s?', $loanArticle['LoanArticle']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Loan Article'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Articles'), array('controller' => 'articles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Article'), array('controller' => 'articles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Loans'), array('controller' => 'loans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Loan'), array('controller' => 'loans', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person Technician Return'), array('controller' => 'people', 'action' => 'add')); ?> </li>
	</ul>
</div>
