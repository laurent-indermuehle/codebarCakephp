<div class="locations view">
<h2><?php  echo __('Location');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($location['Location']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($location['Location']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Location'), array('action' => 'edit', $location['Location']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Location'), array('action' => 'delete', $location['Location']['id']), null, __('Are you sure you want to delete # %s?', $location['Location']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Locations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Articles'), array('controller' => 'articles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Article'), array('controller' => 'articles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Operations'), array('controller' => 'operations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Operation'), array('controller' => 'operations', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Articles');?></h3>
	<?php if (!empty($location['Article'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Serial Number'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Part Of'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th><?php echo __('Is Active'); ?></th>
		<th><?php echo __('Is Available'); ?></th>
		<th><?php echo __('Article Type Id'); ?></th>
		<th><?php echo __('Etat'); ?></th>
		<th><?php echo __('Date Of Purchase'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($location['Article'] as $article): ?>
		<tr>
			<td><?php echo $article['id'];?></td>
			<td><?php echo $article['serial_number'];?></td>
			<td><?php echo $article['description'];?></td>
			<td><?php echo $article['part_of'];?></td>
			<td><?php echo $article['location_id'];?></td>
			<td><?php echo $article['is_active'];?></td>
			<td><?php echo $article['is_available'];?></td>
			<td><?php echo $article['article_type_id'];?></td>
			<td><?php echo $article['etat'];?></td>
			<td><?php echo $article['date_of_purchase'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'articles', 'action' => 'view', $article['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'articles', 'action' => 'edit', $article['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'articles', 'action' => 'delete', $article['id']), null, __('Are you sure you want to delete # %s?', $article['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Article'), array('controller' => 'articles', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Operations');?></h3>
	<?php if (!empty($location['Operation'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Intervention Id'); ?></th>
		<th><?php echo __('Operation Type Id'); ?></th>
		<th><?php echo __('Person Technician Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Location Id'); ?></th>
		<th><?php echo __('Estimate Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($location['Operation'] as $operation): ?>
		<tr>
			<td><?php echo $operation['id'];?></td>
			<td><?php echo $operation['intervention_id'];?></td>
			<td><?php echo $operation['operation_type_id'];?></td>
			<td><?php echo $operation['person_technician_id'];?></td>
			<td><?php echo $operation['date'];?></td>
			<td><?php echo $operation['location_id'];?></td>
			<td><?php echo $operation['estimate_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'operations', 'action' => 'view', $operation['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'operations', 'action' => 'edit', $operation['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'operations', 'action' => 'delete', $operation['id']), null, __('Are you sure you want to delete # %s?', $operation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Operation'), array('controller' => 'operations', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
