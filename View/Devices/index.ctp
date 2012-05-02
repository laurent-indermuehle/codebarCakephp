<div class="grid_12">
	<div class="box">
		<h2>
			<?php echo __('Interventions');?>
			<span class="1"></span><span class="r"></span>
		</h2>
		<div class="block">
			<div class="block_in">
			<!-- BEGIN TABLE -->
			<table class="datatable">
				<thead>
				<?php echo $this->Html->tableHeaders(array(
					'Id', 'End of Warranty', 'First seen', 'Serial number', 'Device type', 'Person', 'Actions')); ?>
				</thead>
				<tbody>
				</tbody>
			</table>
			<?php echo $this->Html->scriptStart(array('inline' => false)); ?>
				$('.datatable').dataTable({
				    sAjaxSource: '<?php echo $this->Html->url(array('action' => 'index')); ?>',
					bProcessing: true,
					bServerSide: true,
					bStateSave: true,
					bJQueryUI: true
				});
			<?php echo $this->Html->scriptEnd(); ?>
			</div><!-- block_in -->
		</div><!-- block -->
	</div><!-- box -->
</div><!-- grid_12 -->

<?php $this->start('sidebar'); ?>
		<li><?php echo $this->Html->link(__('New Device'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Device Types'), array('controller' => 'device_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Device Type'), array('controller' => 'device_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Interventions'), array('controller' => 'interventions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Intervention<span class="iconIntervention"></span>'), array('controller' => 'interventions', 'action' => 'add'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('List Problems'), array('controller' => 'problems', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Problem'), array('controller' => 'problems', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Causes'), array('controller' => 'causes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cause'), array('controller' => 'causes', 'action' => 'add')); ?> </li>
<?php $this->end(); ?>