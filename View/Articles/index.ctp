<div class="articles index">
	<h2><?php echo __('Articles');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('serial_number');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th><?php echo $this->Paginator->sort('part_of');?></th>
			<th><?php echo $this->Paginator->sort('location_id');?></th>
			<th><?php echo $this->Paginator->sort('is_active');?></th>
			<th><?php echo $this->Paginator->sort('is_available');?></th>
			<th><?php echo $this->Paginator->sort('article_type_id');?></th>
			<th><?php echo $this->Paginator->sort('etat');?></th>
			<th><?php echo $this->Paginator->sort('date_of_purchase');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($articles as $article): ?>
	<tr>
		<td><?php echo h($article['Article']['id']); ?>&nbsp;</td>
		<td><?php echo h($article['Article']['serial_number']); ?>&nbsp;</td>
		<td><?php echo h($article['Article']['description']); ?>&nbsp;</td>
		<td><?php echo h($article['Article']['part_of']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($article['Location']['name'], array('controller' => 'locations', 'action' => 'view', $article['Location']['id'])); ?>
		</td>
		<td><?php echo h($article['Article']['is_active']); ?>&nbsp;</td>
		<td><?php echo h($article['Article']['is_available']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($article['ArticleType']['id'], array('controller' => 'article_types', 'action' => 'view', $article['ArticleType']['id'])); ?>
		</td>
		<td><?php echo h($article['Article']['etat']); ?>&nbsp;</td>
		<td><?php echo h($article['Article']['date_of_purchase']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $article['Article']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $article['Article']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $article['Article']['id']), null, __('Are you sure you want to delete # %s?', $article['Article']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Article'), array('action' => 'add')); ?></li>
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
