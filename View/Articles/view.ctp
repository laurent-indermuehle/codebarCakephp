<div class="articles view">
<h2><?php  echo __('Article');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($article['Article']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Serial Number'); ?></dt>
		<dd>
			<?php echo h($article['Article']['serial_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($article['Article']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Part Of'); ?></dt>
		<dd>
			<?php echo h($article['Article']['part_of']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo $this->Html->link($article['Location']['name'], array('controller' => 'locations', 'action' => 'view', $article['Location']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Active'); ?></dt>
		<dd>
			<?php echo h($article['Article']['is_active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Available'); ?></dt>
		<dd>
			<?php echo h($article['Article']['is_available']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Article Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($article['ArticleType']['id'], array('controller' => 'article_types', 'action' => 'view', $article['ArticleType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Etat'); ?></dt>
		<dd>
			<?php echo h($article['Article']['etat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Of Purchase'); ?></dt>
		<dd>
			<?php echo h($article['Article']['date_of_purchase']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Article'), array('action' => 'edit', $article['Article']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Article'), array('action' => 'delete', $article['Article']['id']), null, __('Are you sure you want to delete # %s?', $article['Article']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Articles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Article'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Article Damages');?></h3>
	<?php if (!empty($article['ArticleDamage'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Article Id'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Location'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($article['ArticleDamage'] as $articleDamage): ?>
		<tr>
			<td><?php echo $articleDamage['id'];?></td>
			<td><?php echo $articleDamage['article_id'];?></td>
			<td><?php echo $articleDamage['description'];?></td>
			<td><?php echo $articleDamage['location'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'article_damages', 'action' => 'view', $articleDamage['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'article_damages', 'action' => 'edit', $articleDamage['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'article_damages', 'action' => 'delete', $articleDamage['id']), null, __('Are you sure you want to delete # %s?', $articleDamage['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Article Damage'), array('controller' => 'article_damages', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Loans');?></h3>
	<?php if (!empty($article['Loan'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Person Customer Id'); ?></th>
		<th><?php echo __('Person Technician Id'); ?></th>
		<th><?php echo __('Emprunt Raison'); ?></th>
		<th><?php echo __('Borrow Date'); ?></th>
		<th><?php echo __('Emprunt DateRetour'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($article['Loan'] as $loan): ?>
		<tr>
			<td><?php echo $loan['id'];?></td>
			<td><?php echo $loan['person_customer_id'];?></td>
			<td><?php echo $loan['person_technician_id'];?></td>
			<td><?php echo $loan['Emprunt_Raison'];?></td>
			<td><?php echo $loan['borrow_date'];?></td>
			<td><?php echo $loan['Emprunt_DateRetour'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'loans', 'action' => 'view', $loan['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'loans', 'action' => 'edit', $loan['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'loans', 'action' => 'delete', $loan['id']), null, __('Are you sure you want to delete # %s?', $loan['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Loan'), array('controller' => 'loans', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
