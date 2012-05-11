<div class="grid_12">
	<div class="box">
		<h2><?php echo __('Edit Person'); ?><span class="1"></span><span class="r"></span></h2>
		<div class="block">
			<?php echo $this->Form->create('Person', array(
				'inputDefaults' => array(
					'label' => false,
					'div' => false
				)
			));?>
			<?php echo $this->Form->input('id'); ?>
			<section class="form_row">
				<div class="grid_2"><label><?php echo __('Sciper'); ?></label></div>
				<div class="grid_10">
					<div class="block_content"><?php echo $this->Form->input('sciper', array('class' => 'default input800')); ?></div>
				</div>
				<div class="clear"></div>
			</section>
			<section class="form_row">
				<div class="grid_2"><label><?php echo __('First name'); ?></label></div>
				<div class="grid_10">
					<div class="block_content"><?php echo $this->Form->input('first_name', array('class' => 'default')); ?></div>
				</div>
				<div class="clear"></div>
			</section>
			<section class="form_row">
				<div class="grid_2"><label><?php echo __('Last name'); ?></label></div>
				<div class="grid_10">
					<div class="block_content"><?php echo $this->Form->input('last_name', array('class' => 'default')); ?></div>
				</div>
				<div class="clear"></div>
			</section>
			<section class="form_row">
				<div class="grid_2"><label><?php echo __('Email'); ?></label></div>
				<div class="grid_10">
					<div class="block_content"><?php echo $this->Form->input('email', array('class' => 'default')); ?></div>
				</div>
				<div class="clear"></div>
			</section>
			<section class="form_row">
				<div class="grid_2"><label><?php echo __('Phone number'); ?></label></div>
				<div class="grid_10">
					<div class="block_content"><?php echo $this->Form->input('phone_number', array('class' => 'default')); ?></div>
				</div>
				<div class="clear"></div>
			</section>
			<section class="form_row">
				<div class="grid_2"><label><?php echo __('Is Technician'); ?></label></div>
				<div class="grid_10">
					<div class="block_content"><?php echo $this->Form->input('is_technician', array('class' => 'default')); ?></div>
				</div>
				<div class="clear"></div>
			</section>
			<section class="form_row">
				<div class="grid_2"><label><?php echo __('Is banned'); ?></label></div>
				<div class="grid_10">
					<div class="block_content"><?php echo $this->Form->input('is_banned', array('class' => 'default')); ?></div>
				</div>
				<div class="clear"></div>
			</section>
			<section class="form_row">
				<div class="grid_2"><label><?php echo __('Language'); ?></label></div>
				<div class="grid_10">
					<div class="block_content"><?php echo $this->Form->input('language_id', array('class' => 'default')); ?></div>
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

<?php if (!empty($devices)):?>
<div class="grid_12">
	<div class="box">
	<h2><?php echo __('Related Device');?><span class="1"></span><span class="r"></span></h2>
	<div class="block"><div class="block_in">
		<table>
			<tr>
				<th><?php echo __('Brand'); ?></th>
				<th><?php echo __('Device type'); ?></th>
				<th><?php echo __('Serial number'); ?></th>
				<th><?php echo __('Date first seen'); ?></th>
				<th><?php echo __('Intervention count'); ?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
			<?php foreach ($devices as $device): ?>
			<tr>
				<td><?php echo $device['DeviceType']['Brand']['name']; ?></td>
				<td><?php echo $device['DeviceType']['name']; ?></td>
				<td><?php echo $device['Device']['serial_number']; ?></td>
				<td><?php echo $device['Device']['date_first_seen']; ?></td>
				<td><?php echo count($device['Intervention']); ?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'devices', 'action' => 'edit', $device['DeviceType']['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'devices', 'action' => 'delete', $device['DeviceType']['id']), null, __('Are you sure you want to delete # %s?', $device['DeviceType']['id'])); ?>
				</td>
			</tr>
			<?php endforeach; ?>
		</table>
	</div></div>
	</div>
</div>
<?php endif; ?>

<?php if (!empty($this->request->data['LoanCustomer'])):?>
<div class="grid_12">
	<div class="box">
	<h2><?php echo __('Related Emails for loans');?><span class="1"></span><span class="r"></span></h2>
	<div class="block"><div class="block_in">
		<table>
			<tr>
				<th><?php echo __('Title'); ?></th>
				<th><?php echo __('Message'); ?></th>
				<th><?php echo __('Date'); ?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
			<?php foreach ($this->request->data['LoanCustomer'] as $loan): ?>
			<?php if (!empty($loan['Email'])): ?>
				<?php foreach ($loan['Email'] as $email): ?>
				<tr>
					<td><?php echo $email['title']; ?></td>
					<td><?php echo $email['message']; ?></td>
					<td><?php echo $email['date']; ?></td>
					<td class="actions">
						<?php echo $this->Html->link(__('Edit'), array('controller' => 'emails', 'action' => 'edit', $email['id'])); ?>
						<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'emails', 'action' => 'delete', $email['id']), null, __('Are you sure you want to delete # %s?', $email['id'])); ?>
					</td>
				</tr>
				<?php endforeach; ?>
			<?php endif; ?>
			<?php endforeach; ?>
		</table>
	</div></div>
	</div>
</div>
<?php endif; ?>

<?php if (!empty($this->request->data['LoanCustomer'])):?>
<div class="grid_12">
	<div class="box">
	<h2><?php echo __('Related loans');?><span class="1"></span><span class="r"></span></h2>
	<div class="block"><div class="block_in">
		<table>
			<tr>
				<th><?php echo __('Date'); ?></th>
				<th><?php echo __('Device count'); ?></th>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
			<?php foreach ($this->request->data['LoanCustomer'] as $loan): ?>
			<tr>
				<td><?php echo $loan['borrow_date']; ?></td>
				<td><?php echo count($loan['DeviceLoan']); ?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'loans', 'action' => 'edit', $loan['id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'loans', 'action' => 'delete', $loan['id']), null, __('Are you sure you want to delete # %s?', $loan['id'])); ?>
				</td>
			</tr>
			<?php endforeach; ?>
		</table>
	</div></div>
	</div>
</div>
<?php endif; ?>

<?php $this->start('sidebar'); ?>
	<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Person.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Person.id'))); ?></li>
	<li><?php echo $this->Html->link(__('List People'), array('action' => 'index'));?></li>
	<li><?php echo $this->Html->link(__('List Languages'), array('controller' => 'languages', 'action' => 'index')); ?> </li>
	<li><?php echo $this->Html->link(__('New Language'), array('controller' => 'languages', 'action' => 'add')); ?> </li>
	<li><?php echo $this->Html->link(__('List Devices'), array('controller' => 'devices', 'action' => 'index')); ?> </li>
	<li><?php echo $this->Html->link(__('New Device'), array('controller' => 'devices', 'action' => 'add')); ?> </li>
	<li><?php echo $this->Html->link(__('List Emails'), array('controller' => 'emails', 'action' => 'index')); ?> </li>
	<li><?php echo $this->Html->link(__('New Email To Person'), array('controller' => 'emails', 'action' => 'add')); ?> </li>
	<li><?php echo $this->Html->link(__('List Loans'), array('controller' => 'loans', 'action' => 'index')); ?> </li>
	<li><?php echo $this->Html->link(__('New Loan Customer'), array('controller' => 'loans', 'action' => 'add')); ?> </li>
	<li><?php echo $this->Html->link(__('List Operations'), array('controller' => 'operations', 'action' => 'index')); ?> </li>
	<li><?php echo $this->Html->link(__('New Operation Technician'), array('controller' => 'operations', 'action' => 'add')); ?> </li>
<?php $this->end(); ?>
