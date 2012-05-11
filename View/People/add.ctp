<div class="grid_12">
	<div class="box">
		<h2><?php echo __('Add Person'); ?><span class="1"></span><span class="r"></span></h2>
		<div class="block">
		<div class="block_in">
		<?php echo $this->Form->create('Person', array(
			'inputDefaults' => array(
				'label' => false,
				'div' => false
			)
		)); ?>
			<section class="form_row">
				<div class="grid_2"><label><?php echo __('Sciper'); ?></label></div>
				<div class="grid_10">
					<div class="block_content"><?php echo $this->Form->input('sciper', array('class' => 'default')); ?></div>
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
					<div class="block_content"><?php echo $this->Form->input('last_name', array('class' => 'default input800', 'placeholder' => 'Type your text here')); ?></div>
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
				<div class="grid_2"><label><?php echo __('Is technician'); ?></label></div>
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
				<div class="grid_2"><label><?php echo __('Partner'); ?></label></div>
				<div class="grid_10">
					<div class="block_content"><?php echo $this->Form->input('partner_id', array('class' => 'default')); ?></div>
				</div>
				<div class="clear"></div>
			</section>
			<section class="form_row">
				<div class="grid_2"></div>
				<div class="grid_10">
					<div class="block_content"><?php echo $this->Form->end(array('label' => __('Add'), 'class' => 'button blue medium')); ?></div>
				</div>
				<div class="clear"></div>
			</section>
		</div><!-- block_in -->
		</div><!-- block -->
	</div><!-- box -->
</div><!-- grid_12 -->

<?php $this->start('sidebar'); ?>
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
