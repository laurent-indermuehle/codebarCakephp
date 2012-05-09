<div class="grid_12">
	<div class="box">
		<h2><?php echo __('Edit Intervention'); ?><span class="1"></span><span class="r"></span></h2>
		<div class="block">
			<?php echo $this->Form->create('Intervention', array(
				'inputDefaults' => array(
					'label' => false,
					'div' => false
				)
			));?>
			<?php echo $this->Form->input('id'); ?>
			<section class="form_row">
				<div class="grid_2"><label><?php echo __('Device'); ?></label></div>
				<div class="grid_10">
					<div class="block_content"><?php echo $this->Html->link($this->request->data['Device']['DeviceType']['name'], array('controller' => 'devices', 'action' => 'edit', $this->request->data['Device']['id'])); ?></div>
				</div>
				<div class="clear"></div>
			</section>
			<section class="form_row">
				<div class="grid_2"><label><?php echo __('Description'); ?></label></div>
				<div class="grid_10">
					<div class="block_content"><?php echo $this->Form->input('description', array('class' => 'default input800')); ?></div>
				</div>
				<div class="clear"></div>
			</section>
			<section class="form_row">
				<div class="grid_2"><label><?php echo __('Diagnostic'); ?></label></div>
				<div class="grid_10">
					<div class="block_content"><?php echo $this->Form->input('diagnostic', array('class' => 'default')); ?></div>
				</div>
				<div class="clear"></div>
			</section>
			<section class="form_row">
				<div class="grid_2"><label><?php echo __('Comment'); ?></label></div>
				<div class="grid_10">
					<div class="block_content"><?php echo $this->Form->input('comment', array('class' => 'default')); ?></div>
				</div>
				<div class="clear"></div>
			</section>
			<section class="form_row">
				<div class="grid_2"><label><?php echo __('Breakdown Found'); ?></label></div>
				<div class="grid_10">
					<div class="block_content"><?php echo $this->Form->input('breakdown_found', array('class' => 'default')); ?></div>
				</div>
				<div class="clear"></div>
			</section>
			<section class="form_row">
				<div class="grid_2"></div>
				<div class="grid_10">
					<div class="block_content"><?php echo $this->Form->end(array('label' => __('Submit'), 'class' => 'button blue medium')); ?></div>
				</div>
				<div class="clear"></div>
			</section>
		</div><!-- block -->
	</div><!-- box -->
</div><!-- grid_12 -->

<div class="grid_12">
	<div class="box">
	<h2><?php echo __('Related Operations');?><span class="1"></span><span class="r"></span></h2>
	<?php if (!empty($this->request->data['Operation'])):?>
	<div class="block">
	<div class="block_in">
		<table>
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Location'); ?></th>
				<th><?php echo __('Operation Type'); ?></th>
				<th><?php echo __('Technicien'); ?></th>
				<th><?php echo __('Date'); ?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
			<?php
			$i = 0;
			foreach ($this->request->data['Operation'] as $operation): ?>
			<tr>
				<td><?php echo $operation['id'];?></td>
				<td><?php echo $operation['location_id'];?></td>
				<td><?php echo $operation['OperationType']['name'];?></td>
				<td><?php echo $operation['PersonTechnician']['first_name'].' '.$operation['PersonTechnician']['last_name'];?></td>
				<td><?php echo $operation['date'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'emails', 'action' => 'edit', $operation['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'emails', 'action' => 'delete', $operation['id']), null, __('Are you sure you want to delete # %s?', $operation['id'])); ?>
				</td>
			</tr>
			<?php endforeach; ?>
		</table>
	</div>
	</div>
	<?php endif; ?>
	</div>
</div>

<div class="grid_12">
	<div class="box">
	<h2><?php echo __('Related Emails');?><span class="1"></span><span class="r"></span></h2>
	<?php if (!empty($this->request->data['Email'])):?>
	<div class="block">
	<div class="block_in">
		<table>
			<tr>
				<th><?php echo __('Id'); ?></th>
				<th><?php echo __('Title'); ?></th>
				<th><?php echo __('Message'); ?></th>
				<th><?php echo __('Date'); ?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
			<?php
			$i = 0;
			foreach ($this->request->data['Email'] as $email): ?>
			<tr>
				<td><?php echo $email['id'];?></td>
				<td><?php echo $email['title'];?></td>
				<td><?php echo $email['message'];?></td>
				<td><?php echo $email['date'];?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'emails', 'action' => 'edit', $email['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'emails', 'action' => 'delete', $email['id']), null, __('Are you sure you want to delete # %s?', $email['id'])); ?>
				</td>
			</tr>
			<?php endforeach; ?>
		</table>
	</div>
	</div>
	<?php endif; ?>
	</div>
</div>

<?php $this->start('sidebar'); ?>
	<li><?php echo $this->Html->link(__('List Interventions'), array('action' => 'index'));?></li>
	<li><?php echo $this->Html->link(__('List Devices'), array('controller' => 'devices', 'action' => 'index')); ?> </li>
	<li><?php echo $this->Html->link(__('New Device'), array('controller' => 'devices', 'action' => 'add')); ?> </li>
	<li><?php echo $this->Html->link(__('List Documents'), array('controller' => 'documents', 'action' => 'index')); ?> </li>
	<li><?php echo $this->Html->link(__('New Document'), array('controller' => 'documents', 'action' => 'add')); ?> </li>
	<li><?php echo $this->Html->link(__('List Emails'), array('controller' => 'emails', 'action' => 'index')); ?> </li>
	<li><?php echo $this->Html->link(__('New Email'), array('controller' => 'emails', 'action' => 'add')); ?> </li>
	<li><?php echo $this->Html->link(__('List Estimates'), array('controller' => 'estimates', 'action' => 'index')); ?> </li>
	<li><?php echo $this->Html->link(__('New Estimate'), array('controller' => 'estimates', 'action' => 'add')); ?> </li>
	<li><?php echo $this->Html->link(__('List External Intervention Numbers'), array('controller' => 'external_intervention_numbers', 'action' => 'index')); ?> </li>
	<li><?php echo $this->Html->link(__('New External Intervention Number'), array('controller' => 'external_intervention_numbers', 'action' => 'add')); ?> </li>
	<li><?php echo $this->Html->link(__('List Operations'), array('controller' => 'operations', 'action' => 'index')); ?> </li>
	<li><?php echo $this->Html->link(__('New Operation'), array('controller' => 'operations', 'action' => 'add')); ?> </li>
	<li><?php echo $this->Html->link(__('List Technical Loans'), array('controller' => 'technical_loans', 'action' => 'index')); ?> </li>
	<li><?php echo $this->Html->link(__('New Technical Loan'), array('controller' => 'technical_loans', 'action' => 'add')); ?> </li>
	<li><?php echo $this->Html->link(__('List Problems'), array('controller' => 'problems', 'action' => 'index')); ?> </li>
	<li><?php echo $this->Html->link(__('New Problem'), array('controller' => 'problems', 'action' => 'add')); ?> </li>
<?php $this->end(); ?>