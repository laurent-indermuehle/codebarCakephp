<div class="grid_12">
	<div class="box">
		<h2>
			<?php echo __('People');?>
			<span class="1"></span><span class="r"></span>
		</h2>
		<div class="block">
			<div class="block_in">
			<!-- BEGIN TABLE -->
			<table class="datatable">
				<thead>
				<?php echo $this->Html->tableHeaders(array(
					'Id', 'Sciper', 'First name', 'Last name', 'Email', 'Phone number', 'Is technician', 'Is banned', 'Language', 'Partner', 'Actions')); ?>
				</thead>
				<tbody>
				</tbody>
			</table>
			<?php echo $this->Html->scriptStart(array('inline' => false)); ?>
				$('.datatable').dataTable({
				    sAjaxSource: '<?php echo $this->Html->url(array('action' => 'index')); ?>',
					bProcessing: true,
					bServerSide: true,
					bJQueryUI: true,
					sPaginationType: "full_numbers"
				});
			<?php echo $this->Html->scriptEnd(); ?>
			</div><!-- block_in -->
		</div><!-- block -->
	</div><!-- box -->
</div><!-- grid_12 -->

<?php $this->start('sidebar'); ?>
	<li><?php echo $this->Html->link(__('New Person'), array('action' => 'add')); ?></li>
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
