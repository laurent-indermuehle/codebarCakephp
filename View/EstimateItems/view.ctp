<div class="estimateItems view">
<h2><?php  echo __('Estimate Item');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($estimateItem['EstimateItem']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estimate'); ?></dt>
		<dd>
			<?php echo $this->Html->link($estimateItem['Estimate']['id'], array('controller' => 'estimates', 'action' => 'view', $estimateItem['Estimate']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($estimateItem['EstimateItem']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quantity'); ?></dt>
		<dd>
			<?php echo h($estimateItem['EstimateItem']['quantity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($estimateItem['EstimateItem']['price']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Estimate Item'), array('action' => 'edit', $estimateItem['EstimateItem']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Estimate Item'), array('action' => 'delete', $estimateItem['EstimateItem']['id']), null, __('Are you sure you want to delete # %s?', $estimateItem['EstimateItem']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Estimate Items'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estimate Item'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estimates'), array('controller' => 'estimates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estimate'), array('controller' => 'estimates', 'action' => 'add')); ?> </li>
	</ul>
</div>
