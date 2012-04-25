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

			<?php /*
			<div class="dataTables_wrapper" id="basictable_wrapper">
			<table class="display" id="bastictable">
			<thead>
			<tr>
				<th><?php //echo $this->Paginator->sort('id'); ?></th>
				<th><?php //echo $this->Paginator->sort('description');?></th>
				<th><?php //echo $this->Paginator->sort('diagnostic');?></th>
				<th><?php //echo $this->Paginator->sort('breakdown_found');?></th>
				<th><?php //echo __('Actions');?></th>
				<?php //$this->Paginator->sort('device_id'); $this->Paginator->sort('entry_date'); $this->Paginator->sort('comment'); $this->Paginator->sort('resolved_date'); $this->Paginator->sort('exit_date'); ?>
			</tr>
			</thead>
			<tbody>
			<?php
			foreach ($interventions as $intervention): ?>
			<tr class="gradeX">
				<td><?php echo h($intervention['Intervention']['id']); ?>&nbsp;</td>
				<?php //echo $this->Html->link($intervention['DeviceType']['name'], array('controller' => 'devices', 'action' => 'view', $intervention['Device']['id'])); ?>
				<?php //echo h($intervention['OperationEntryDate']['entry_date']); ?>
				<td><?php echo h($intervention['Intervention']['description']); ?>&nbsp;</td>
				<td><?php echo h($intervention['Intervention']['diagnostic']); ?>&nbsp;</td>
				<?php //echo h($intervention['Intervention']['comment']); ?>
				<td><?php echo h($intervention['Intervention']['breakdown_found']); ?>&nbsp;</td>
				<?php //echo h($intervention['OperationResolvedDate']['resolved_date']); ?>
				<?php //echo h($intervention['OperationExitDate']['exit_date']); ?>
				<td class="actions">
					<?php //echo $this->Html->link(__('View'), array('action' => 'view', $intervention['Intervention']['id'])); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $intervention['Intervention']['id'])); ?>
					<?php //echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $intervention['Intervention']['id']), null, __('Are you sure you want to delete # %s?', $intervention['Intervention']['id'])); ?>
				</td>
			</tr>
			<?php endforeach; ?>
			</tbody>
			</table>
			<div class="fg-toolbar ui-toolbar ui-widget-header ui-corner-bl ui-corner-br ui-helper-clearfix">
				<div class="dataTables_info" id="basictable_info"> 
				<?php echo $this->Paginator->counter(array(
					'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
				)); ?>
				</div>

				<div class="dataTables_paginate fg-buttonset ui-buttonset fg-buttonset-multi ui-buttonset-multi paging_full_numbers" id="basictable_paginate">
				<?php
					echo $this->Paginator->first('|< '. __('first'), array('class' => 'first ui-corner-tl ui-corner-bl fg-button ui-button ui-state-default', 'id' => 'basictable_first'));
					echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'previous fg-button ui-button ui-state-default', 'id' => 'basictable_previous'));
					echo '<span>';
					echo $this->Paginator->numbers(array('separator' => '', array(), null, array('class' => 'fg-button ui-button ui-state-default')));
					echo '</span>';
					echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next fg-button ui-button ui-state-default', 'id' => 'basictable_next'));
					echo $this->Paginator->last(__('last') . ' >|', array('class' => 'last ui-corner-tr ui-corner-br fg-button ui-button ui-button ui-state-default', 'id' => 'basictable_last'));
				?>
				</div><!-- paging -->
			</div><!-- fg-toolbar -->
			</div><!-- dataTAbles_wrapper -->
			*/ ?>
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
