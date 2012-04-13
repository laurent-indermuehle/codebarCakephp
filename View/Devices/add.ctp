<div class="devices form">
<?php echo $this->Form->create('Device');?>
	<fieldset>
		<legend><?php echo __('Add Device'); ?></legend>
	<?php
		echo $this->Form->input('date_end_of_warranty');
		echo $this->Form->input('date_first_seen');
		echo $this->Form->input('serial_number');
		echo $this->Form->input('device_category_id', array('div' => 'device_tree'));
		echo $this->Form->input('brand_id', array('div' => 'device_tree'));
		echo $this->Form->input('device_type_id', array('div' => 'device_tree'));
		echo $this->Form->input('person_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Devices'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Device Types'), array('controller' => 'device_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Device Type'), array('controller' => 'device_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Interventions'), array('controller' => 'interventions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Intervention'), array('controller' => 'interventions', 'action' => 'add')); ?> </li>
	</ul>
</div>

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