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
					'Id', 'Description', 'Diagnostic', 'Breakdown found', 'Actions')); ?>
				</thead>
				<tbody>
				</tbody>
			</table>
			<?php echo $this->Html->scriptStart(array('inline' => false)); ?>
				$('.datatable').dataTable({
				    sAjaxSource: '<?php echo $this->Html->url(array('action' => 'index')); ?>',
					bProcessing: true,
					bServerSide: true,
					bStateSave: true
				});
			<?php echo $this->Html->scriptEnd(); ?>
			</div><!-- block_in -->
		</div><!-- block -->
	</div><!-- box -->
</div><!-- grid_12 -->


<?php $this->start('sidebar'); ?>
	<li><?php echo $this->Html->link('New Intervention<span class="iconIntervention"></span>', array('action' => 'add'), array('escape' => false)); ?></li>
	<li><?php echo $this->Html->link('List Documents<span class="iconDocument"></span>', array('controller' => 'documents', 'action' => 'index'), array('escape' => false)); ?> </li>
	<li><?php echo $this->Html->link('New Document<span class="iconDocument"></span>', array('controller' => 'documents', 'action' => 'add'), array('escape' => false)); ?> </li>
	<li><?php echo $this->Html->link('List Emails<span class="iconEmail"></span>', array('controller' => 'emails', 'action' => 'index'), array('escape' => false)); ?> </li>
	<li><?php echo $this->Html->link('New Email<span class="iconEmail"></span>', array('controller' => 'emails', 'action' => 'add'), array('escape' => false)); ?> </li>
	<li><?php echo $this->Html->link(__('List Estimates'), array('controller' => 'estimates', 'action' => 'index')); ?> </li>
	<li><?php echo $this->Html->link(__('New Estimate'), array('controller' => 'estimates', 'action' => 'add')); ?> </li>
	<li><?php echo $this->Html->link(__('List External Intervention Numbers'), array('controller' => 'external_intervention_numbers', 'action' => 'index')); ?> </li>
	<li><?php echo $this->Html->link(__('New External Intervention Number'), array('controller' => 'external_intervention_numbers', 'action' => 'add')); ?> </li>
	<li><?php echo $this->Html->link(__('List Devices'), array('controller' => 'devices', 'action' => 'index')); ?> </li>
	<li><?php echo $this->Html->link(__('New Device'), array('controller' => 'devices', 'action' => 'add')); ?> </li>
	<li><?php echo $this->Html->link(__('List Operations'), array('controller' => 'operations', 'action' => 'index')); ?> </li>
	<li><?php echo $this->Html->link(__('New Operation'), array('controller' => 'operations', 'action' => 'add')); ?> </li>
<?php $this->end(); ?>
