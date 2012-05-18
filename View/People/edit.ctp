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
				<div class="grid_2"><?php echo $this->Form->Label('Person.sciper'); ?></div>
				<div class="grid_10">
					<div class="block_content"><?php echo $this->Form->input('sciper', array('class' => 'default input800')); ?></div>
				</div>
				<div class="clear"></div>
			</section>
			<section class="form_row">
				<div class="grid_2"><?php echo $this->Form->Label('Person.first_name'); ?></div>
				<div class="grid_10">
					<div class="block_content"><?php echo $this->Form->input('first_name', array('class' => 'default')); ?></div>
				</div>
				<div class="clear"></div>
			</section>
			<section class="form_row">
				<div class="grid_2"><?php echo $this->Form->Label('Person.last_name'); ?></div>
				<div class="grid_10">
					<div class="block_content"><?php echo $this->Form->input('last_name', array('class' => 'default')); ?></div>
				</div>
				<div class="clear"></div>
			</section>
			<section class="form_row">
				<div class="grid_2"><?php echo $this->Form->Label('Person.email'); ?></div>
				<div class="grid_10">
					<div class="block_content"><?php echo $this->Form->input('email', array('class' => 'default')); ?></div>
				</div>
				<div class="clear"></div>
			</section>
			<section class="form_row">
				<div class="grid_2"><?php echo $this->Form->Label('Person.phone_number'); ?></div>
				<div class="grid_10">
					<div class="block_content"><?php echo $this->Form->input('phone_number', array('class' => 'default')); ?></div>
				</div>
				<div class="clear"></div>
			</section>
			<section class="form_row">
				<div class="grid_2"><?php echo $this->Form->Label('Person.is_technician'); ?></div>
				<div class="grid_10">
					<div class="block_content"><?php echo $this->Form->input('is_technician', array('class' => 'default')); ?></div>
				</div>
				<div class="clear"></div>
			</section>
			<section class="form_row">
				<div class="grid_2"><?php echo $this->Form->Label('Person.is_banned'); ?></div>
				<div class="grid_10">
					<div class="block_content"><?php echo $this->Form->input('is_banned', array('class' => 'default')); ?></div>
				</div>
				<div class="clear"></div>
			</section>
			<section class="form_row">
				<div class="grid_2"><?php echo $this->Form->Label('Person.language_id'); ?></div>
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
	<h2><?php echo __('Related Devices (').count($devices).')';?><span class="1"></span><span class="r"></span></h2>
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

<?php if (!empty($loans)):?>
<div class="grid_12">
	<div class="box">
	<h2><?php echo __('Related Loans (').count($loans).')';?><span class="1"></span><span class="r"></span></h2>
	<div class="block"><div class="block_in">
		<table>
			<tr>
				<th><?php echo __('Date'); ?></th>
				<th><?php echo __('Devices'); ?></th>
				<th><?php echo __('Date de retour convenu'); ?></th>
				<th><?php echo __('Date de retour réel'); ?>
				<th><?php echo __('Retard'); ?>
				<th class="actions"><?php echo __('Actions');?></th>
			</tr>
			<?php foreach ($loans as $loan): ?>
			<tr>
				<td><?php echo $loan['LoanCustomer']['borrow_date']; ?></td>
				<td>
				<?php $i = 1; ?>
				<?php foreach ($loan['DeviceLoan'] as $device): ?>
					<?php if(!empty($device['Device']['DeviceType'])) echo $device['Device']['DeviceType']['Brand']['name'].' '.$device['Device']['DeviceType']['name']; ?>
					<?php if($i < count($loan['DeviceLoan'])) echo ', '; ?>
					<?php $i++; ?>
				<?php endforeach; ?>
				</td>
				<td>
					<?php if(!empty($loan['PersonalLoan'])) {
						echo $loan['PersonalLoan'][0]['planned_return_date'];
					}
					else {
						echo $this->Html->link('Intervention n°'.$loan['TechnicalLoan'][0]['intervention_id'], array('controller' => 'interventions', 'action' => 'edit', $loan['TechnicalLoan'][0]['intervention_id']));
					} ?>
				</td>
				<td><?php echo $loan['ActualReturnDate']; ?></td>
				<td><?php echo $loan['DeltaDate']; ?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'loans', 'action' => 'edit', $loan['LoanCustomer']['person_customer_id'])); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'loans', 'action' => 'delete', $loan['LoanCustomer']['person_customer_id']), null, __('Are you sure you want to delete # %s?', $loan['LoanCustomer']['person_customer_id'])); ?>
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
