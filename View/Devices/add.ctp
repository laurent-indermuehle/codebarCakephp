<div class="grid_12">
	<div class="box">
		<h2><?php echo __('Add Device'); ?><span class="1"></span><span class="r"></span></h2>
		<div class="block">
		<div class="block_in">
		<?php echo $this->Form->create('Device', array(
			'inputDefaults' => array(
				'label' => false,
				'div' => false
			)
		)); ?>
		<section class="form_row">
			<div class="grid_2"><label><?php echo __('date_end_of_warranty'); ?></label></div>
			<div class="grid_10">
				<div class="block_content"><?php echo $this->Form->input('date_end_of_warranty', array('class' => 'default')); ?></div>
			</div>
			<div class="clear"></div>
		</section>
		<section class="form_row">
			<div class="grid_2"><label><?php echo __('date_first_seen'); ?></label></div>
			<div class="grid_10">
				<div class="block_content"><?php echo $this->Form->input('date_first_seen', array('class' => 'default')); ?></div>
			</div>
			<div class="clear"></div>
		</section>
		<section class="form_row">
			<div class="grid_2"><label><?php echo __('serial_number'); ?></label></div>
			<div class="grid_10">
				<div class="block_content"><?php echo $this->Form->input('serial_number', array('class' => 'default input800', 'placeholder' => 'Type your text here')); ?></div>
			</div>
			<div class="clear"></div>
		</section>
		<section class="form_row">
			<div class="grid_2"><label><?php echo __('device_category_id'); ?></label></div>
			<div class="grid_10">
				<div class="block_content"><?php echo $this->Form->input('device_category_id', array('class' => 'default')); //array('div' => 'device_tree') ?></div>
			</div>
			<div class="clear"></div>
		</section>
		<section class="form_row">
			<div class="grid_2"><label><?php echo __('brand_id'); ?></label></div>
			<div class="grid_10">
				<div class="block_content"><?php echo $this->Form->input('brand_id', array('class' => 'default')); ?></div>
			</div>
			<div class="clear"></div>
		</section>
		<section class="form_row">
			<div class="grid_2"><label><?php echo __('device_type_id'); ?></label></div>
			<div class="grid_10">
				<div class="block_content"><?php echo $this->Form->input('device_type_id', array('class' => 'default')); //array('div' => 'device_tree') ?></div>
			</div>
			<div class="clear"></div>
		</section>
		<section class="form_row">
			<div class="grid_2"><label><?php echo __('person_id'); ?></label></div>
			<div class="grid_10">
				<div class="block_content"><?php echo $this->Form->input('person_id', array('class' => 'default')); ?></div>
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
	<li><?php echo $this->Html->link(__('List Devices'), array('action' => 'index'));?></li>
	<li><?php echo $this->Html->link(__('List Device Types'), array('controller' => 'device_types', 'action' => 'index')); ?> </li>
	<li><?php echo $this->Html->link(__('New Device Type'), array('controller' => 'device_types', 'action' => 'add')); ?> </li>
	<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
	<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
	<li><?php echo $this->Html->link(__('List Interventions'), array('controller' => 'interventions', 'action' => 'index')); ?> </li>
	<li><?php echo $this->Html->link(__('New Intervention'), array('controller' => 'interventions', 'action' => 'add')); ?> </li>
<?php $this->end(); ?>

<?php
//get brand by device_category
$this->Js->get('#DeviceDeviceCategoryId')->event('change', 
	$this->Js->request(array(
		'controller'=>'device_types',
		'action'=>'getBrandsByDeviceCategory'
		), array(
		'update'=>'#DeviceBrandId',
		'async' => true,
		'method' => 'post',
		'dataExpression'=>true,
		'data'=> $this->Js->serializeForm(array(
			'isForm' => true,
			'inline' => true
			))
		))
	);

//get device_type by brand
//http://www.willis-owen.co.uk/2011/11/dynamic-select-box-with-cakephp-2-0/
$this->Js->get('#DeviceBrandId')->event('change', 
	$this->Js->request(array(
		'controller'=>'device_types',
		'action'=>'getByBrand'
		), array(
		'update'=>'#DeviceDeviceTypeId',
		'async' => true,
		'method' => 'post',
		'dataExpression'=>true,
		'data'=> $this->Js->serializeForm(array(
			'isForm' => true,
			'inline' => true
			))
		))
	);
?>