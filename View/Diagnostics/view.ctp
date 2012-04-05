<div class="diagnostics view">
<h2><?php  echo __('Diagnostic');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($diagnostic['Diagnostic']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Question'); ?></dt>
		<dd>
			<?php echo h($diagnostic['Diagnostic']['question']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($diagnostic['Diagnostic']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Diagnostic'), array('action' => 'edit', $diagnostic['Diagnostic']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Diagnostic'), array('action' => 'delete', $diagnostic['Diagnostic']['id']), null, __('Are you sure you want to delete # %s?', $diagnostic['Diagnostic']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Diagnostics'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Diagnostic'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Causes'), array('controller' => 'causes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cause'), array('controller' => 'causes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Causes');?></h3>
	<?php if (!empty($diagnostic['Cause'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($diagnostic['Cause'] as $cause): ?>
		<tr>
			<td><?php echo $cause['id'];?></td>
			<td><?php echo $cause['description'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'causes', 'action' => 'view', $cause['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'causes', 'action' => 'edit', $cause['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'causes', 'action' => 'delete', $cause['id']), null, __('Are you sure you want to delete # %s?', $cause['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Cause'), array('controller' => 'causes', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
