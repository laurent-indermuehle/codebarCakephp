<div class="operations view">
<h2><?php  echo __('Operation');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($operation['Operation']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Intervention'); ?></dt>
		<dd>
			<?php echo $this->Html->link($operation['Intervention']['id'], array('controller' => 'interventions', 'action' => 'view', $operation['Intervention']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Operation Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($operation['OperationType']['name'], array('controller' => 'operation_types', 'action' => 'view', $operation['OperationType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Person Technician'); ?></dt>
		<dd>
			<?php echo $this->Html->link($operation['PersonTechnician']['id'], array('controller' => 'people', 'action' => 'view', $operation['PersonTechnician']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($operation['Operation']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Location'); ?></dt>
		<dd>
			<?php echo $this->Html->link($operation['Location']['name'], array('controller' => 'locations', 'action' => 'view', $operation['Location']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estimate'); ?></dt>
		<dd>
			<?php echo $this->Html->link($operation['Estimate']['id'], array('controller' => 'estimates', 'action' => 'view', $operation['Estimate']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Operation'), array('action' => 'edit', $operation['Operation']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Operation'), array('action' => 'delete', $operation['Operation']['id']), null, __('Are you sure you want to delete # %s?', $operation['Operation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Operations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Operation'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Interventions'), array('controller' => 'interventions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Intervention'), array('controller' => 'interventions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Operation Types'), array('controller' => 'operation_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Operation Type'), array('controller' => 'operation_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person Technician'), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Locations'), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Location'), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estimates'), array('controller' => 'estimates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estimate'), array('controller' => 'estimates', 'action' => 'add')); ?> </li>
	</ul>
</div>
