<div class="partners view">
<h2><?php  echo __('Partner');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($partner['Partner']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($partner['Partner']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Partner'), array('action' => 'edit', $partner['Partner']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Partner'), array('action' => 'delete', $partner['Partner']['id']), null, __('Are you sure you want to delete # %s?', $partner['Partner']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Partners'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Partner'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List External Intervention Number Types'), array('controller' => 'external_intervention_number_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New External Intervention Number Type'), array('controller' => 'external_intervention_number_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List External Intervention Numbers'), array('controller' => 'external_intervention_numbers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New External Intervention Number'), array('controller' => 'external_intervention_numbers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Brands'), array('controller' => 'brands', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Brand'), array('controller' => 'brands', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related External Intervention Number Types');?></h3>
	<?php if (!empty($partner['ExternalInterventionNumberType'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Partner Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($partner['ExternalInterventionNumberType'] as $externalInterventionNumberType): ?>
		<tr>
			<td><?php echo $externalInterventionNumberType['id'];?></td>
			<td><?php echo $externalInterventionNumberType['partner_id'];?></td>
			<td><?php echo $externalInterventionNumberType['name'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'external_intervention_number_types', 'action' => 'view', $externalInterventionNumberType['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'external_intervention_number_types', 'action' => 'edit', $externalInterventionNumberType['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'external_intervention_number_types', 'action' => 'delete', $externalInterventionNumberType['id']), null, __('Are you sure you want to delete # %s?', $externalInterventionNumberType['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New External Intervention Number Type'), array('controller' => 'external_intervention_number_types', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related External Intervention Numbers');?></h3>
	<?php if (!empty($partner['ExternalInterventionNumber'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Intervention Id'); ?></th>
		<th><?php echo __('Partner Id'); ?></th>
		<th><?php echo __('External Intervention Number Type Id'); ?></th>
		<th><?php echo __('Number'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($partner['ExternalInterventionNumber'] as $externalInterventionNumber): ?>
		<tr>
			<td><?php echo $externalInterventionNumber['id'];?></td>
			<td><?php echo $externalInterventionNumber['intervention_id'];?></td>
			<td><?php echo $externalInterventionNumber['partner_id'];?></td>
			<td><?php echo $externalInterventionNumber['external_intervention_number_type_id'];?></td>
			<td><?php echo $externalInterventionNumber['number'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'external_intervention_numbers', 'action' => 'view', $externalInterventionNumber['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'external_intervention_numbers', 'action' => 'edit', $externalInterventionNumber['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'external_intervention_numbers', 'action' => 'delete', $externalInterventionNumber['id']), null, __('Are you sure you want to delete # %s?', $externalInterventionNumber['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New External Intervention Number'), array('controller' => 'external_intervention_numbers', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Brands');?></h3>
	<?php if (!empty($partner['Brand'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Link To Warranty Check'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($partner['Brand'] as $brand): ?>
		<tr>
			<td><?php echo $brand['id'];?></td>
			<td><?php echo $brand['name'];?></td>
			<td><?php echo $brand['link_to_warranty_check'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'brands', 'action' => 'view', $brand['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'brands', 'action' => 'edit', $brand['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'brands', 'action' => 'delete', $brand['id']), null, __('Are you sure you want to delete # %s?', $brand['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Brand'), array('controller' => 'brands', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
