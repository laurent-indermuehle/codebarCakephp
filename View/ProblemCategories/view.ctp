<div class="problemCategories view">
<h2><?php  echo __('Problem Category');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($problemCategory['ProblemCategory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($problemCategory['ProblemCategory']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Problem Category'), array('action' => 'edit', $problemCategory['ProblemCategory']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Problem Category'), array('action' => 'delete', $problemCategory['ProblemCategory']['id']), null, __('Are you sure you want to delete # %s?', $problemCategory['ProblemCategory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Problem Categories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Problem Category'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Problems'), array('controller' => 'problems', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Problem'), array('controller' => 'problems', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Problems');?></h3>
	<?php if (!empty($problemCategory['Problem'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Problem Category Id'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($problemCategory['Problem'] as $problem): ?>
		<tr>
			<td><?php echo $problem['id'];?></td>
			<td><?php echo $problem['problem_category_id'];?></td>
			<td><?php echo $problem['description'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'problems', 'action' => 'view', $problem['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'problems', 'action' => 'edit', $problem['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'problems', 'action' => 'delete', $problem['id']), null, __('Are you sure you want to delete # %s?', $problem['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Problem'), array('controller' => 'problems', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
