<div class="technicalLoans view">
<h2><?php  echo __('Technical Loan');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($technicalLoan['TechnicalLoan']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Intervention'); ?></dt>
		<dd>
			<?php echo $this->Html->link($technicalLoan['Intervention']['id'], array('controller' => 'interventions', 'action' => 'view', $technicalLoan['Intervention']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Loan'); ?></dt>
		<dd>
			<?php echo $this->Html->link($technicalLoan['Loan']['id'], array('controller' => 'loans', 'action' => 'view', $technicalLoan['Loan']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Technical Loan'), array('action' => 'edit', $technicalLoan['TechnicalLoan']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Technical Loan'), array('action' => 'delete', $technicalLoan['TechnicalLoan']['id']), null, __('Are you sure you want to delete # %s?', $technicalLoan['TechnicalLoan']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Technical Loans'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Technical Loan'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Interventions'), array('controller' => 'interventions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Intervention'), array('controller' => 'interventions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Loans'), array('controller' => 'loans', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Loan'), array('controller' => 'loans', 'action' => 'add')); ?> </li>
	</ul>
</div>
