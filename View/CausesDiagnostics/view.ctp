<div class="causesDiagnostics view">
<h2><?php  echo __('Causes Diagnostic');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($causesDiagnostic['CausesDiagnostic']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Diagnostic'); ?></dt>
		<dd>
			<?php echo $this->Html->link($causesDiagnostic['Diagnostic']['id'], array('controller' => 'diagnostics', 'action' => 'view', $causesDiagnostic['Diagnostic']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cause'); ?></dt>
		<dd>
			<?php echo $this->Html->link($causesDiagnostic['Cause']['id'], array('controller' => 'causes', 'action' => 'view', $causesDiagnostic['Cause']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Answer'); ?></dt>
		<dd>
			<?php echo h($causesDiagnostic['CausesDiagnostic']['answer']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Causes Diagnostic'), array('action' => 'edit', $causesDiagnostic['CausesDiagnostic']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Causes Diagnostic'), array('action' => 'delete', $causesDiagnostic['CausesDiagnostic']['id']), null, __('Are you sure you want to delete # %s?', $causesDiagnostic['CausesDiagnostic']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Causes Diagnostics'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Causes Diagnostic'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Diagnostics'), array('controller' => 'diagnostics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Diagnostic'), array('controller' => 'diagnostics', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Causes'), array('controller' => 'causes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cause'), array('controller' => 'causes', 'action' => 'add')); ?> </li>
	</ul>
</div>
