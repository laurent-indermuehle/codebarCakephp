<div class="grid_12">
	<div class="box">
		<h2><?php echo __('Add Intervention'); ?><span class="1"></span><span class="r"></span></h2>
		<div class="block">
		<div class="block_in">
		<?php echo $this->Form->create('Intervention', array(
			'inputDefaults' => array(
				'label' => false,
				'div' => false
			)
		)); ?>
			<section class="form_row">
				<div class="grid_2"><label><?php echo __('Device'); ?></label></div>
				<div class="grid_10">
					<div class="block_content"><?php echo $this->Form->input('device_id', array('class' => 'default')); ?></div>
				</div>
				<div class="clear"></div>
			</section>
			<section class="form_row">
				<div class="grid_2"><label><?php echo __('Entry Date'); ?></label></div>
				<div class="grid_10">
					<div class="block_content"><?php echo $this->Form->input('entry_date', array('class' => 'default')); ?></div>
				</div>
				<div class="clear"></div>
			</section>
			<section class="form_row">
				<div class="grid_2"><label><?php echo __('Description'); ?></label></div>
				<div class="grid_10">
					<div class="block_content"><?php echo $this->Form->input('description', array('class' => 'default input80pc', 'placeholder' => 'Type your text here')); ?></div>
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
				<div class="grid_2"><label><?php echo __('breakdown_found'); ?></label></div>
				<div class="grid_10">
					<div class="block_content"><?php echo $this->Form->input('breakdown_found', array('class' => 'default')); ?></div>
				</div>
				<div class="clear"></div>
			</section>
			<section class="form_row">
				<div class="grid_2"><label><?php echo __('Problem'); ?></label></div>
				<div class="grid_10">
					<div class="block_content"><?php echo $this->Form->input('Problem', array('class' => 'default')); ?></div>
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
		</div><!-- block_in -->
		</div><!-- block -->
	</div><!-- box -->
</div><!-- grid_12 -->

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